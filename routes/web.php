<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/layanan', 'layanan')->name('layanan');
Route::view('/portofolio', 'portofolio')->name('portofolio');
Route::view('/harga', 'harga')->name('harga');
Route::view('/faq', 'faq')->name('faq');
Route::view('/konsultasi', 'konsultasi')->name('konsultasi');