<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$basePath = __DIR__ . '/../';

try {
    echo "Step 1: Base path OK\n";
    
    $autoload = $basePath . 'vendor/autoload.php';
    if (!file_exists($autoload)) {
        die("ERROR: vendor/autoload.php not found");
    }
    echo "Step 2: Vendor found\n";
    
    require $autoload;
    echo "Step 3: Vendor loaded\n";
    
    $publicIndex = $basePath . 'public/index.php';
    if (!file_exists($publicIndex)) {
        die("ERROR: public/index.php not found");
    }
    echo "Step 4: Public index found\n";
    
    // Create directories BEFORE bootstrap
    $dirs = [
        '/tmp/storage',
        '/tmp/storage/framework',
        '/tmp/storage/framework/views',
        '/tmp/storage/framework/cache',
        '/tmp/storage/framework/cache/data',
        '/tmp/storage/framework/sessions',
        '/tmp/storage/logs',
        '/tmp/storage/app/public',
        '/tmp/bootstrap',
        '/tmp/bootstrap/cache',
    ];
    
    foreach ($dirs as $dir) {
        if (!is_dir($dir)) {
            @mkdir($dir, 0777, true);
        }
    }
    echo "Step 4.5: Directories created\n";
    
    // Load .env
    if (file_exists($basePath . '.env')) {
        echo "Step 4.7: .env found, loading...\n";
        $dotenv = Dotenv\Dotenv::createImmutable($basePath);
        $dotenv->load();
        echo "Step 4.8: .env loaded. APP_ENV=" . getenv('APP_ENV') . "\n";
    } else {
        echo "Step 4.7: .env NOT found\n";
    }
    
    echo "Step 5: About to require public/index.php...\n";
    
    // This is where it fails
    require $publicIndex;
    
    echo "Step 6: Laravel loaded successfully\n";
    
} catch (Throwable $e) {
    http_response_code(500);
    header('Content-Type: text/plain');
    
    $output = "=== ERROR ===\n";
    $output .= "Message: " . $e->getMessage() . "\n";
    $output .= "File: " . $e->getFile() . ":" . $e->getLine() . "\n";
    $output .= "Class: " . get_class($e) . "\n";
    $output .= "\n=== Stack Trace ===\n";
    $output .= $e->getTraceAsString();
    
    echo $output;
    error_log($output);
    exit(1);
}