<?php

use App\Http\Controllers\PerformanceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/febo-post', [PerformanceController::class, 'feboCount']);