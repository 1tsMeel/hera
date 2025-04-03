<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ClassificationController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TypeController;
use Illuminate\Support\Facades\Route;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('classifications', ClassificationController::class);
    Route::resource('types', TypeController::class);
    Route::resource('brands', BrandController::class);
    Route::resource('products', ProductController::class);
});
