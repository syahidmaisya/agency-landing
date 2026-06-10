<?php

// Paksa tampilkan error biar ketahuan penyebab 500
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Laravel butuh folder writable; di Vercel cuma /tmp yang bisa ditulis
$dirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/bootstrap/cache',
];
foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0777, true);
    }
}

require __DIR__ . '/../public/index.php';