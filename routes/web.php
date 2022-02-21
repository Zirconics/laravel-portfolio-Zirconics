<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/posts/{post}', [PostController::class, 'show']);

// Index page
Route::get('/', [WelcomeController::class, 'show']);

// Dashboard page
Route::get('dashboard', [DashboardController::class, 'show']);

// FaQ page
Route::get('faq', [FaqController::class, 'show']);

// Profile page
Route::get('profile', [ProfileController::class, 'show']);


// Article page
// Create
Route::get('articles/create', [ArticlesController::class, 'create'])->name('articles.create');
Route::post('/articles', [ArticlesController::class, 'store'])->name('articles.store');
// Read
Route::get('articles/{article}', [ArticlesController::class, 'show'])->name('articles.show');
Route::get('articles', [ArticlesController::class, 'index'])->name('articles.index');
// Update
Route::get('articles/{article}/edit', [ArticlesController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{article}', [ArticlesController::class, 'update'])->name('articles.update');
// Delete
Route::delete('articles/{article}', [ArticlesController::class, 'delete'])->name('articles.delete');
