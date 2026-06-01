$ErrorActionPreference = 'Stop'

$msdeploy = 'C:\Program Files\IIS\Microsoft Web Deploy V3\msdeploy.exe'
if (-not (Test-Path -LiteralPath $msdeploy)) {
    $msdeploy = 'C:\Program Files (x86)\IIS\Microsoft Web Deploy V3\msdeploy.exe'
}
if (-not (Test-Path -LiteralPath $msdeploy)) {
    throw 'Microsoft Web Deploy msdeploy.exe was not found.'
}

$projectRoot = Split-Path -Parent $PSScriptRoot
$sourcePath = Join-Path $projectRoot 'public_html'
$userName = 'btpinnov'
$siteName = 'dev.cloudexcelon.com'
$publishUrl = 'https://dev.cloudexcelon.com:8172/msdeploy.axd?site=dev.cloudexcelon.com'

$securePassword = Read-Host "Web Deploy password for $userName" -AsSecureString
$credential = New-Object System.Management.Automation.PSCredential($userName, $securePassword)
$password = $credential.GetNetworkCredential().Password

& $msdeploy `
    -verb:sync `
    "-source:contentPath=$sourcePath" `
    "-dest:contentPath=$siteName,computerName=$publishUrl,userName=$userName,password=$password,authType=Basic" `
    -allowUntrusted `
    -enableRule:DoNotDeleteRule `
    -verbose

if ($LASTEXITCODE -ne 0) {
    throw "Web Deploy failed with exit code $LASTEXITCODE."
}
