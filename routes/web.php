<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoriesController;

Route::get('/', function () {return view('welcome');});

// Posts
Route::get('/posts', [PostsController::class, 'index']);
Route::get('/posts/create', [PostsController::class, 'create']);
Route::post('/posts', [PostsController::class, 'store']);
Route::get('/posts/{posts}', [PostsController::class, 'show']);
Route::get('/posts/{posts}/edit', [PostsController::class, 'edit']);
Route::put('/posts/{posts}', [PostsController::class, 'update']);
Route::delete('/posts/{posts}', [PostsController::class, 'destroy']);

// Categories
Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/categories/create', [CategoriesController::class, 'create']);
Route::post('/categories', [CategoriesController::class, 'store']);
Route::get('/categories/{categories}', [CategoriesController::class, 'show']);
Route::get('/categories/{categories}/edit', [CategoriesController::class, 'edit']);
Route::put('/categories/{categories}', [CategoriesController::class, 'update']);
Route::delete('/categories/{categories}', [CategoriesController::class, 'destroy']);