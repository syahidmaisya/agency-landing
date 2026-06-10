<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello SB NET Studio!';
});

Route::get('/test-json', function () {
    return ['status' => 'ok'];
});