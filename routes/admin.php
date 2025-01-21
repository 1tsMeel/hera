<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ClassificationController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::resource('classifications', ClassificationController::class);
Route::resource('types', TypeController::class);
Route::resource('brands', BrandController::class);
Route::resource('features', FeatureController::class);
Route::resource('products', ProductController::class);
