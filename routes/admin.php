<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return "Hola desde admin";
})->name('index');