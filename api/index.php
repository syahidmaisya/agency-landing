<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

$logFile = '/tmp/laravel-error.log';
ini_set('error_log', $logFile);

$basePath = __DIR__ . '/../';

// Create required directories
$dirs = [
    '/tmp/storage',
    '/tmp/storage/framework',
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/testing',
    '/tmp/storage/logs',
    '/tmp/storage/app',
    '/tmp/storage/app/public',
    '/tmp/bootstrap',
    '/tmp/bootstrap/cache',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0777, true);
    }
    if (is_dir($dir)) {
        @chmod($dir, 0777);
    }
}

try {
    // Load vendor
    $autoloadPath = $basePath . 'vendor/autoload.php';
    if (!file_exists($autoloadPath)) {
        throw new Exception("vendor/autoload.php not found");
    }
    require $autoloadPath;
    
    // Load .env
    $envPath = $basePath . '.env';
    if (file_exists($envPath)) {
        $dotenv = Dotenv\Dotenv::createImmutable($basePath);
        $dotenv->load();
    }
    
    // DELETE ENTIRE bootstrap/cache directory and recreate
    $bootstrapCachePath = $basePath . 'bootstrap/cache';
    if (is_dir($bootstrapCachePath)) {
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($bootstrapCachePath, RecursiveDirectoryIterator::SKIP_DOTS),
            RecursiveIteratorIterator::CHILD_FIRST
        );
        
        foreach ($files as $fileinfo) {
            if ($fileinfo->isFile()) {
                @unlink($fileinfo->getRealPath());
            }
        }
    }
    
    // Recreate bootstrap/cache
    if (!is_dir($bootstrapCachePath)) {
        @mkdir($bootstrapCachePath, 0777, true);
    }
    @chmod($bootstrapCachePath, 0777);
    
    // Also clear local storage bootstrap cache
    $localBootstrapCache = $basePath . 'bootstrap/cache';
    if (is_dir($localBootstrapCache)) {
        foreach (glob($localBootstrapCache . '/*.php') as $file) {
            @unlink($file);
        }
    }
    
    // Boot Laravel
    $publicIndexPath = $basePath . 'public/index.php';
    if (!file_exists($publicIndexPath)) {
        throw new Exception("public/index.php not found");
    }
    require $publicIndexPath;
    
} catch (Throwable $e) {
    error_log("ERROR: " . $e->getMessage());
    error_log("File: " . $e->getFile() . ":" . $e->getLine());
    error_log("Trace: " . $e->getTraceAsString());
    
    http_response_code(500);
    header('Content-Type: application/json');
    echo json_encode([
        'error' => $e->getMessage(),
        'file' => basename($e->getFile()) . ':' . $e->getLine(),
    ], JSON_PRETTY_PRINT);
    exit(1);
}