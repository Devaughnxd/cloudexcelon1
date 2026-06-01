<?php
declare(strict_types=1);

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$file = __DIR__ . $path;

if ($path !== '/' && is_file($file)) {
    return false;
}

$routes = [
    '/' => 'index.php',
    '/about' => 'about.php',
    '/services' => 'services.php',
    '/news' => 'news.php',
    '/contact' => 'contact.php',
    '/privacy-policy' => 'privacy-policy.php',
    '/legal-notice' => 'legal-notice.php',
];

if (isset($routes[$path])) {
    require __DIR__ . '/' . $routes[$path];
    return true;
}

http_response_code(404);
require __DIR__ . '/index.php';
