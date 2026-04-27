<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeavyController;
use App\Http\Controllers\StressTestController;
use PhpParser\Builder\Function_;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/zen', function () {
    return view('zen');
});

Route::get('/ubuntu', Function() {
    return view('ubuntu');
});

Route::get('/dod', function(){
    return view('dod');
});
