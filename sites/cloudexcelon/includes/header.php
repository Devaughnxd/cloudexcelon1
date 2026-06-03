<?php
$brand = require __DIR__ . '/site.php';
function e(string $value): string { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }
function site_base_path(): string
{
    static $base = null;
    global $brand;
    if ($base !== null) {
        return $base;
    }
    $configured = getenv('BTP_BASE_PATH') ?: '';
    if ($configured !== '') {
        $base = '/' . trim($configured, '/');
        return $base === '/' ? '' : $base;
    }
    $sources = [
        $_SERVER['HTTP_X_ORIGINAL_URL'] ?? '',
        $_SERVER['UNENCODED_URL'] ?? '',
        $_SERVER['REQUEST_URI'] ?? '',
        $_SERVER['SCRIPT_NAME'] ?? '',
    ];
    foreach ($sources as $source) {
        $path = parse_url((string) $source, PHP_URL_PATH) ?: (string) $source;
        if (preg_match('#^(/plesk-site-preview/[^/]+)#', $path, $match)) {
            $base = rtrim($match[1], '/');
            return $base;
        }
    }
    $host = (string) ($_SERVER['HTTP_HOST'] ?? '');
    $host = preg_replace('/:\d+$/', '', $host) ?: $host;
    if (
        isset($brand['domain']) &&
        filter_var($host, FILTER_VALIDATE_IP) &&
        !in_array($host, ['127.0.0.1', '::1'], true)
    ) {
        $base = '/plesk-site-preview/' . $brand['domain'];
        return $base;
    }
    $base = '';
    return $base;
}
function site_url(string $path = ''): string
{
    $base = site_base_path();
    $path = trim($path, '/');
    return ($base === '' ? '' : $base) . ($path === '' ? '/' : '/' . $path);
}
function asset(string $path): string { return site_url('assets/' . ltrim($path, '/')); }
function footerDescription(array $brand): string { return $brand['name'] . ' helps clients clarify needs, compare options, coordinate delivery paths, and move technology work toward accountable next steps.'; }
$canonical = 'https://' . $brand['domain'] . ($pagePath ?? '/');
?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($pageTitle ?? $brand['name']) ?></title>
  <meta name="description" content="<?= e($metaDescription ?? $brand['summary']) ?>">
  <link rel="canonical" href="<?= e($canonical) ?>">
  <meta property="og:title" content="<?= e($pageTitle ?? $brand['name']) ?>">
  <meta property="og:description" content="<?= e($metaDescription ?? $brand['summary']) ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= e($canonical) ?>">
  <meta property="og:image" content="https://<?= e($brand['domain']) ?>/assets/images/logo.png">
  <link rel="preload" href="<?= e(asset('css/style.css')) ?>" as="style">
  <link rel="stylesheet" href="<?= e(asset('css/style.css')) ?>">
  <script src="<?= e(asset('js/main.js')) ?>" defer></script>
  <?php require __DIR__ . '/analytics.php'; ?>
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>
<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="<?= e(site_url()) ?>" aria-label="<?= e($brand['name']) ?> home"><img src="<?= e(asset('images/logo.svg')) ?>" alt="<?= e($brand['name']) ?> logo" width="210" height="82"></a>
    <?php require __DIR__ . '/navigation.php'; ?>
    <a class="button button-primary header-cta" href="<?= e(site_url('contact')) ?>"><?= e($brand['cta']) ?></a>
    <button class="nav-toggle" type="button" aria-label="Open navigation" aria-expanded="false"><span></span><span></span><span></span></button>
  </div>
</header>
<main id="main">