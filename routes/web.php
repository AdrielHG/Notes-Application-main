<?php

use App\Http\Controllers\FolderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;


/* Route::get('/', [FolderController::class, 'index']);
Route::get('/', [CategoryController::class, 'index']);
Route::get('/', [NoteController::class, 'index']);
Route::get('/', [UserController::class, 'index']); */

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', CategoryController::class);
Route::resource('folders', FolderController::class);
Route::resource('notes', NoteController::class);
Route::resource('users', UserController::class);
