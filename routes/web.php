<?php

use App\Http\Controllers\PerformanceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});