<?php
declare(strict_types=1);
require_once __DIR__ . '/site.php';

$pageTitle = $pageTitle ?? $site['name'] . ' | ' . $site['tagline'];
$metaDescription = $metaDescription ?? 'BTP PraaS provides Professional-as-a-Service staff augmentation with primary and backup professionals, team support, flexible scaling, and cost-efficient IT talent.';
$pagePath = $pagePath ?? current_path();
$ogImage = $ogImage ?? '/assets/images/hero-pros.png';
$bodyClass = $bodyClass ?? '';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($pageTitle) ?></title>
    <meta name="description" content="<?= e($metaDescription) ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= e(page_url($pagePath)) ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= e($site['name']) ?>">
    <meta property="og:title" content="<?= e($pageTitle) ?>">
    <meta property="og:description" content="<?= e($metaDescription) ?>">
    <meta property="og:url" content="<?= e(page_url($pagePath)) ?>">
    <meta property="og:image" content="<?= e(page_url($ogImage)) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= e($pageTitle) ?>">
    <meta name="twitter:description" content="<?= e($metaDescription) ?>">
    <meta name="theme-color" content="#000000">
    <link rel="icon" href="/assets/images/btp-praas-logo.png">
    <link rel="preload" href="/assets/css/styles.css" as="style">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <?php
    include_schema([
        '@context' => 'https://schema.org',
        '@type' => 'ProfessionalService',
        'name' => $site['name'],
        'url' => $site['url'],
        'logo' => page_url('/assets/images/btp-praas-logo.png'),
        'image' => page_url('/assets/images/hero-pros.png'),
        'description' => $metaDescription,
        'telephone' => $site['phone'],
        'email' => $site['email'],
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => $site['address'],
            'addressLocality' => 'New York',
            'addressRegion' => 'NY',
            'postalCode' => '10001',
            'addressCountry' => 'US',
        ],
        'areaServed' => 'United States',
        'serviceType' => 'Professional-as-a-Service IT staff augmentation',
    ]);
    ?>
</head>
<body class="<?= e($bodyClass) ?>">
<a class="skip-link" href="#main">Skip to content</a>
<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="/" aria-label="BTP PraaS home">
            <img src="/assets/images/btp-praas-logo.png" alt="BTP PraaS" width="215" height="74">
        </a>
        <?php require __DIR__ . '/navigation.php'; ?>
        <a class="button button-small button-primary header-cta" href="/contact">Schedule a Consultation</a>
    </div>
</header>
<main id="main">
