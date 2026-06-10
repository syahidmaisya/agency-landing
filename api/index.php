<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

// Log errors ke file
$logFile = '/tmp/laravel-error.log';
ini_set('error_log', $logFile);

// Create required directories
$dirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/testing',
    '/tmp/storage/logs',
    '/tmp/storage/app/public',
    '/tmp/bootstrap/cache',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0777, true);
    }
}

try {
    // Check if vendor/autoload exists
    $autoloadPath = __DIR__ . '/../vendor/autoload.php';
    if (!file_exists($autoloadPath)) {
        throw new Exception("Missing vendor/autoload.php at: $autoloadPath");
    }
    
    require $autoloadPath;
    
    // Check if public/index.php exists
    $publicIndexPath = __DIR__ . '/../public/index.php';
    if (!file_exists($publicIndexPath)) {
        throw new Exception("Missing public/index.php at: $publicIndexPath");
    }
    
    require $publicIndexPath;
    
} catch (Throwable $e) {
    error_log("Laravel Error: " . $e->getMessage());
    error_log("File: " . $e->getFile() . ":" . $e->getLine());
    error_log("Trace: " . $e->getTraceAsString());
    
    http_response_code(500);
    echo json_encode([
        'error' => $e->getMessage(),
        'file' => $e->getFile(),
        'line' => $e->getLine(),
    ]);
    exit(1);
}