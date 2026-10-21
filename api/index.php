<?php
/**
 * Vercel Serverless PHP Router
 * Handles request routing for Vercel deployment of Zire Alcyone
 */

$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$path = parse_url($requestUri, PHP_URL_PATH);
$path = trim($path, '/');

$pageMap = [
    '' => 'index.php',
    'index' => 'index.php',
    'index.php' => 'index.php',
    'about' => 'about.php',
    'about.php' => 'about.php',
    'services' => 'services.php',
    'services.php' => 'services.php',
    'portfolio' => 'portfolio.php',
    'portfolio.php' => 'portfolio.php',
    'contact' => 'contact.php',
    'contact.php' => 'contact.php',
];

$rootDir = dirname(__DIR__);
chdir($rootDir);

if (isset($pageMap[$path])) {
    $targetFile = $rootDir . '/' . $pageMap[$path];
    if (file_exists($targetFile)) {
        require $targetFile;
        exit;
    }
}

$directFile = $rootDir . '/' . $path;
if (file_exists($directFile) && !is_dir($directFile) && pathinfo($directFile, PATHINFO_EXTENSION) === 'php') {
    require $directFile;
    exit;
}

// Fallback to index.php
require $rootDir . '/index.php';
