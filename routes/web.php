<?php

use App\Http\Controllers\Api\FolderApiController;
use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\NoteApiController;
use App\Http\Controllers\Api\UserApiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/categories', [CategoryApiController::class, 'index']);
Route::get('/api/category/{id}', [CategoryApiController::class, 'show']);

Route::get('/api/users', [UserApiController::class, 'index']);
Route::get('/api/user/{id}', [UserApiController::class, 'show']);

Route::get('/api/folders', [FolderApiController::class, 'index']);
Route::get('/api/folder/{id}', [FolderApiController::class, 'show']);

Route::get('/api/notes', [NoteApiController::class, 'index']);
Route::get('/api/note/{id}', [NoteApiController::class, 'show']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::resource('categories', CategoryController::class);
    Route::resource('folders', FolderController::class);
    Route::resource('notes', NoteController::class);
    Route::resource('users', UserController::class);
});

require __DIR__.'/auth.php';
