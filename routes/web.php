<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CategoryController;

Route::get('/', [PublicController::class, 'welcome']);
Route::resource('categories', CategoryController::class);