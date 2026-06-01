<?php
declare(strict_types=1);

$host = $_SERVER['HTTP_HOST'] ?? '';
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'https';
$siteUrl = getenv('SITE_URL') ?: ($host !== '' ? $scheme . '://' . $host : 'https://YOUR-DOMAIN.com');
$siteHost = parse_url($siteUrl, PHP_URL_HOST) ?: 'YOUR-DOMAIN.com';

$site = [
    'name' => 'BTP PraaS',
    'tagline' => 'Flexible IT Staffing Solutions | Backed by a Dedicated Team',
    'url' => rtrim($siteUrl, '/'),
    'host' => $siteHost,
    'email' => 'info@praas.pro',
    'legalEmail' => 'service@praas.pro',
    'phone' => '(800) 781-6632',
    'address' => '276 5th Avenue Suite 704',
    'city' => 'New York, NY 10001',
    'brand' => 'A Solution Brand of BTP Innovations',
    'year' => '2025',
];

$navItems = [
    ['label' => 'Home', 'href' => '/'],
    ['label' => 'About Us', 'href' => '/about'],
    ['label' => 'Services', 'href' => '/services'],
    ['label' => 'News', 'href' => '/news'],
    ['label' => 'Contact', 'href' => '/contact'],
];

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function page_url(string $path = ''): string
{
    global $site;
    return rtrim($site['url'], '/') . '/' . ltrim($path, '/');
}

function current_path(): string
{
    $path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
    return rtrim($path, '/') ?: '/';
}

function is_active(string $href): bool
{
    $current = current_path();
    $target = rtrim($href, '/') ?: '/';
    return $current === $target;
}

function include_schema(array $schema): void
{
    echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>' . PHP_EOL;
}
