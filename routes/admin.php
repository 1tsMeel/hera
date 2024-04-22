<?php

use App\Http\Controllers\Admin\ClassificationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('admin.dashboard');
})->name('dashboard');

Route::resource('classifications', ClassificationController::class);