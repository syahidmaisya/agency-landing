<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

$logFile = '/tmp/laravel-error.log';
ini_set('error_log', $logFile);

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
    
    echo "Step 1: Base path OK\n";
    
    $autoloadPath = $basePath . 'vendor/autoload.php';
    if (!file_exists($autoloadPath)) {
        die("ERROR: vendor/autoload.php not found");
    }
    echo "Step 2: Vendor found\n";
    
    require $autoloadPath;
    echo "Step 3: Vendor loaded\n";
    
    $publicIndex = $basePath . 'public/index.php';
    if (!file_exists($publicIndex)) {
        die("ERROR: public/index.php not found");
    }
    echo "Step 4: Public index found\n";
    
    echo "Step 4.5: Directories created\n";
    
    $envPath = $basePath . '.env';
    if (file_exists($envPath)) {
        echo "Step 4.7: .env found\n";
        
        // Read .env file raw
        $envContent = file_get_contents($envPath);
        echo "Step 4.7a: .env file size: " . strlen($envContent) . " bytes\n";
        echo "Step 4.7b: First 200 chars: " . substr($envContent, 0, 200) . "\n";
        
        // Try loading
        try {
            $dotenv = Dotenv\Dotenv::createImmutable($basePath);
            $dotenv->load();
            echo "Step 4.8: dotenv->load() completed\n";
        } catch (Exception $e) {
            echo "Step 4.8: dotenv->load() FAILED: " . $e->getMessage() . "\n";
            throw $e;
        }
        
        // Check multiple ways to get APP_ENV
        $appEnvGet = getenv('APP_ENV');
        $appEnvServer = $_SERVER['APP_ENV'] ?? 'NOT_IN_SERVER';
        $appEnvEnv = $_ENV['APP_ENV'] ?? 'NOT_IN_ENV';
        
        echo "Step 4.9: getenv('APP_ENV') = [$appEnvGet]\n";
        echo "Step 4.9b: \$_SERVER['APP_ENV'] = [$appEnvServer]\n";
        echo "Step 4.9c: \$_ENV['APP_ENV'] = [$appEnvEnv]\n";
        
    } else {
        echo "Step 4.7: .env NOT found\n";
    }
    
    echo "Step 5: About to require public/index.php...\n";
    require $publicIndex;
    echo "Step 6: Laravel loaded\n";
    
} catch (Throwable $e) {
    http_response_code(500);
    header('Content-Type: text/plain');
    echo "ERROR: " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . ":" . $e->getLine() . "\n";
    echo $e->getTraceAsString();
    exit(1);
}