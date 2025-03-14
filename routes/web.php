<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoriesController;

Route::get('/', function () {return view('welcome');});

// Posts
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{posts}', [PostController::class, 'show']);
Route::get('/posts/{posts}/edit', [PostController::class, 'edit']);
Route::put('/posts/{posts}', [PostController::class, 'update']);
Route::delete('/posts/{posts}', [PostController::class, 'destroy']);

// Categories
Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/categories/create', [CategoriesController::class, 'create']);
Route::post('/categories', [CategoriesController::class, 'store']);
Route::get('/categories/{categories}', [CategoriesController::class, 'show']);
Route::get('/categories/{categories}/edit', [CategoriesController::class, 'edit']);
Route::put('/categories/{categories}', [CategoriesController::class, 'update']);
Route::delete('/categories/{categories}', [CategoriesController::class, 'destroy']);