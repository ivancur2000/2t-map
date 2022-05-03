<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PlatformController;

Route::get('',[HomeController::class, 'index']);

Route::resource('category', CategoryController::class)->names('category');
Route::resource('platform', PlatformController::class)->names('platform');
