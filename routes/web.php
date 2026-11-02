<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/category', 'category');
Route::view('/journalist', 'journalist');
Route::view('/admin', 'admin');

// Заглушки: сохранение будет реализовано в следующих лабораторных работах
Route::post('/journalist', fn () => back());
Route::post('/admin', fn () => back());
