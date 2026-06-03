param(
    [int]$BasePort = 8190,
    [string]$SiteName = ""
)

$ErrorActionPreference = "Stop"
$Root = Resolve-Path (Join-Path $PSScriptRoot "..")
$SitesRoot = Join-Path $Root "sites"

if (-not (Test-Path $SitesRoot)) {
    throw "Sites folder not found: $SitesRoot"
}

$php = Get-Command php -ErrorAction SilentlyContinue
if (-not $php) {
    throw "PHP is not available on PATH. Install or add PHP before running QOS verification."
}

$sites = Get-ChildItem -Path $SitesRoot -Directory | Sort-Object Name
if ($SiteName) {
    $sites = $sites | Where-Object { $_.Name -eq $SiteName }
}
if (-not $sites) {
    throw "No generated sites found under $SitesRoot"
}

$failures = New-Object System.Collections.Generic.List[string]

function Add-Failure {
    param([string]$Message)
    $script:failures.Add($Message) | Out-Null
}

Write-Host "QOS: PHP lint"
$phpFiles = Get-ChildItem -Path $SitesRoot -Recurse -Filter *.php
foreach ($file in $phpFiles) {
    $lint = & php -l $file.FullName 2>&1
    if ($LASTEXITCODE -ne 0) {
        Add-Failure "PHP lint failed: $($file.FullName) :: $lint"
    }
}
Write-Host "QOS: linted $($phpFiles.Count) PHP files"

Write-Host "QOS: content and path hygiene"
$activeFiles = Get-ChildItem -Path $SitesRoot -Recurse -File | Where-Object {
    $_.FullName -notmatch "\\docs\\" -and
    $_.Extension -in @(".php", ".css", ".js", ".xml", ".txt", ".config", ".svg")
}

$patterns = @(
    @{ Pattern = "lorem ipsum"; Reason = "placeholder copy" },
    @{ Pattern = "Veteran-Owned"; Reason = "unverified ownership claim" },
    @{ Pattern = "500\+ Clients|250\+|\$150M|99\.9|99%"; Reason = "unverified/fake metric" },
    @{ Pattern = "privacy-policy|legal-notice"; Reason = "removed legal/privacy page link" },
    @{ Pattern = "\.\./assets|\./assets|public_html"; Reason = "inconsistent deploy path" },
    @{ Pattern = "(href|action)=`"/"; Reason = "hardcoded root-relative internal link; use site_url() for Plesk preview compatibility" }
)

foreach ($entry in $patterns) {
    $matches = $activeFiles | Select-String -Pattern $entry.Pattern -CaseSensitive:$false
    foreach ($match in $matches) {
        Add-Failure "$($entry.Reason): $($match.Path):$($match.LineNumber)"
    }
}

$serverProcesses = @()
try {
    Write-Host "QOS: local route and asset smoke tests"
    for ($i = 0; $i -lt $sites.Count; $i++) {
        $site = $sites[$i]
        $port = $BasePort + $i
        Write-Host "QOS: smoke testing $($site.Name) on port $port"
        $outFile = Join-Path $env:TEMP "btp-$($site.Name)-php-out.log"
        $errFile = Join-Path $env:TEMP "btp-$($site.Name)-php-err.log"
        $quotedSiteRoot = '"' + $site.FullName + '"'
        $process = Start-Process -FilePath "php" -ArgumentList @("-S", "127.0.0.1:$port", "-t", $quotedSiteRoot) -PassThru -WindowStyle Hidden -RedirectStandardOutput $outFile -RedirectStandardError $errFile
        $serverProcesses += $process
        Start-Sleep -Milliseconds 450

        $routes = @(
            "/",
            "/about",
            "/services",
            "/news",
            "/contact",
            "/docs/website-audit.md",
            "/docs/plesk-preview-audit.md",
            "/docs/competitive-benchmark.md",
            "/docs/qos-checklist.md",
            "/docs/content-source-policy.md"
        )
        $assets = @(
            "/assets/css/style.css",
            "/assets/js/main.js",
            "/assets/images/logo.svg",
            "/assets/images/hero-visual.svg",
            "/assets/images/about-visual.svg",
            "/assets/images/services-visual.svg",
            "/assets/images/contact-visual.svg",
            "/assets/images/news-visual.svg",
            "/assets/images/proof-visual.svg",
            "/assets/images/process-visual.svg",
            "/assets/images/trust-visual.svg"
        )

        foreach ($path in ($routes + $assets)) {
            $uri = "http://127.0.0.1:$port$path"
            try {
                $response = Invoke-WebRequest -Uri $uri -UseBasicParsing -TimeoutSec 3
                if ($response.StatusCode -ne 200) {
                    Add-Failure "$($site.Name) $path returned HTTP $($response.StatusCode)"
                }
            } catch {
                Add-Failure "$($site.Name) $path failed: $($_.Exception.Message)"
            }
        }
    }
} finally {
    foreach ($process in $serverProcesses) {
        if ($process -and -not $process.HasExited) {
            Stop-Process -Id $process.Id -Force
        }
    }
}

if ($failures.Count -gt 0) {
    Write-Host "QOS verification failed:" -ForegroundColor Red
    foreach ($failure in $failures) {
        Write-Host "- $failure" -ForegroundColor Red
    }
    exit 1
}

Write-Host "QOS verification passed for $($sites.Count) sites." -ForegroundColor Green
