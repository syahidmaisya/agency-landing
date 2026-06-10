<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

// Set error log path for Vercel
$logFile = '/tmp/laravel-error.log';
ini_set('error_log', $logFile);

// Create required directories with proper permissions
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
    // Define the base path
    $basePath = __DIR__ . '/../';
    
    // Check if vendor/autoload exists
    $autoloadPath = $basePath . 'vendor/autoload.php';
    if (!file_exists($autoloadPath)) {
        throw new Exception("Missing vendor/autoload.php - Run: composer install");
    }
    
    require $autoloadPath;
    
    // Check if public/index.php exists
    $publicIndexPath = $basePath . 'public/index.php';
    if (!file_exists($publicIndexPath)) {
        throw new Exception("Missing public/index.php");
    }
    
    // Boot Laravel
    require $publicIndexPath;
    
} catch (Throwable $e) {
    // Log to file
    error_log("=== Laravel Bootstrap Error ===");
    error_log("Message: " . $e->getMessage());
    error_log("File: " . $e->getFile() . ":" . $e->getLine());
    error_log("Time: " . date('Y-m-d H:i:s'));
    error_log("=== Stack Trace ===");
    error_log($e->getTraceAsString());
    
    // Return error response
    http_response_code(500);
    header('Content-Type: application/json');
    
    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage(),
        'file' => $e->getFile(),
        'line' => $e->getLine(),
        'env' => env('APP_ENV', 'unknown'),
        'debug' => env('APP_DEBUG', false),
    ], JSON_PRETTY_PRINT);
    
    exit(1);
}