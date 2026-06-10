<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

$logFile = '/tmp/laravel-error.log';
ini_set('error_log', $logFile);

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
    $basePath = __DIR__ . '/../';
    
    // Load vendor autoloader
    $autoloadPath = $basePath . 'vendor/autoload.php';
    if (!file_exists($autoloadPath)) {
        throw new Exception("vendor/autoload.php not found. Run: composer install");
    }
    require $autoloadPath;
    
    // Load .env explicitly
    $envPath = $basePath . '.env';
    if (file_exists($envPath)) {
        $dotenv = Dotenv\Dotenv::createImmutable($basePath);
        $dotenv->load();
    } else {
        error_log("WARNING: .env file not found at: $envPath");
    }
    
    // Check public/index.php exists
    $publicIndexPath = $basePath . 'public/index.php';
    if (!file_exists($publicIndexPath)) {
        throw new Exception("public/index.php not found");
    }
    
    // Clear stale cache before bootstrapping
    $cacheFiles = [
        $basePath . 'bootstrap/cache/config.php',
        $basePath . 'bootstrap/cache/routes.php',
        $basePath . 'bootstrap/cache/services.php',
    ];
    
    foreach ($cacheFiles as $file) {
        if (file_exists($file)) {
            @unlink($file);
        }
    }
    
    // Bootstrap Laravel
    require $publicIndexPath;
    
} catch (Throwable $e) {
    error_log("=== Laravel Bootstrap Error ===");
    error_log("Message: " . $e->getMessage());
    error_log("File: " . $e->getFile() . ":" . $e->getLine());
    error_log("Time: " . date('Y-m-d H:i:s'));
    error_log("=== Stack Trace ===");
    error_log($e->getTraceAsString());
    
    // Check what env vars are loaded
    error_log("APP_ENV: " . (getenv('APP_ENV') ?: 'NOT SET'));
    error_log("APP_DEBUG: " . (getenv('APP_DEBUG') ?: 'NOT SET'));
    
    http_response_code(500);
    header('Content-Type: application/json');
    
    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage(),
        'file' => basename($e->getFile()) . ':' . $e->getLine(),
        'env_loaded' => getenv('APP_ENV') ?: 'NOT LOADED',
        'debug' => getenv('APP_DEBUG') === 'true',
    ], JSON_PRETTY_PRINT);
    
    exit(1);
}