<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeavyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/zen', function () {
    return view('zen');
});

Route::get('/test-load', [HeavyController::class, 'index']);