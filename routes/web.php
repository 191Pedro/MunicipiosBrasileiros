<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/daily', function () {
    return view('daily');
})->name('daily');
Route::get('/eliminated', function () {
    return view('eliminated');
})->name('eliminated');
Route::get('/data', function () {
    return view('data');
})->name('data');
