<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/create-post', [PostController::class, 'store'])->name('create-post');
Route::get('/post/id', [PostController::class, 'viewPost'])->name('post');
Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::prefix('dashboard')->group(function () {
    Route::get('/home', [AdminController::class, 'index'])->name('home-dashboard');

    Route::get('/categories', [AdminController::class, 'categories'])->name('categories');
    Route::get('/store-category', [AdminController::class, 'storeCategory'])->name('store-category');

    Route::get('/create-post', [AdminController::class, 'createPost'])->name('create-post');
    Route::get('/knowledge', [AdminController::class, 'knowledge'])->name('knowledge');
    Route::get('/create-editor', [AdminController::class, 'createEditor'])->name('create-editor');
    Route::get('/editors', [AdminController::class, 'editors'])->name('editors');
});

