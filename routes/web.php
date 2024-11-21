<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // Returns the Home page
});

Route::get('/about', function () {
    return view('about'); // Returns the About page
});

