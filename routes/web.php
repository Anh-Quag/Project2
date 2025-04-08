<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return redirect('/admin-site/index.html');
});

Route::get('/admin-site/{file}', function ($file) {
    return response()->file(public_path('admin-site/' . $file));
})->where('file', '.*');

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/shop', function () {
    return response()->file(public_path('Eshopper/index.html'));
});
Route::get('/login', function () {
    return view('login');
});
