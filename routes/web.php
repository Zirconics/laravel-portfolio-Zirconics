<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticlesController;

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

// Blog page
//Route::get('blogs/{blog}', [BlogController::class, 'blogs']);
Route::get('blogs/create', [BlogController::class, 'create']);
Route::post('/blogs', [BlogController::class, 'store']);
Route::get('blogs/{article}', [BlogController::class, 'show']);
Route::get('blogs', [BlogController::class, 'index']);
//Route::get('blogs/{article}/edit', [BlogController::class, 'update']);
//Route::delete('blogs/{article}', [BlogController::class, 'delete']);

// Blogs
//Route::get('articles/{article}', [ArticlesController::class, 'show']);
