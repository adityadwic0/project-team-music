<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeavyController;
use App\Http\Controllers\StressTestController;


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

Route::get('/dod', function(){
    return view('dod');
});
