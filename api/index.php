<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

try {
    // Simple test
    $basePath = __DIR__ . '/../';
    
    echo "Step 1: Base path OK\n";
    
    // Check vendor
    $autoload = $basePath . 'vendor/autoload.php';
    if (!file_exists($autoload)) {
        die("ERROR: vendor/autoload.php not found at $autoload");
    }
    echo "Step 2: Vendor found\n";
    
    require $autoload;
    echo "Step 3: Vendor loaded\n";
    
    // Check public
    $publicIndex = $basePath . 'public/index.php';
    if (!file_exists($publicIndex)) {
        die("ERROR: public/index.php not found at $publicIndex");
    }
    echo "Step 4: Public index found\n";
    
    require $publicIndex;
    echo "Step 5: Laravel loaded\n";
    
} catch (Throwable $e) {
    http_response_code(500);
    header('Content-Type: text/plain');
    echo "ERROR: " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . ":" . $e->getLine() . "\n";
    echo "Trace:\n" . $e->getTraceAsString();
    exit(1);
}