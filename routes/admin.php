<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PlatformController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

Route::get('',[HomeController::class, 'index']);
Route::resource('roles', RoleController::class)->names('roles');
Route::resource('users', UserController::class)->only('index', 'edit', 'update')->names('users');
Route::resource('category', CategoryController::class)->names('category');
Route::resource('platform', PlatformController::class)->names('platform');
