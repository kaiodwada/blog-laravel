<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\SettingController;
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

    Route::get('/categories', [CategoryController::class, 'categories'])->name('categories');
    Route::post('/store', [CategoryController::class, 'store'])->name('store-category');

    Route::get('/create-post', [PostController::class, 'createPost'])->name('create-post');
    Route::get('/knowledge', [PostController::class, 'knowledge'])->name('knowledge');

    Route::get('/editors', [EditorController::class, 'index'])->name('editors-index');
    Route::get('/editors/create', [EditorController::class, 'create'])->name('editors-create');
    Route::post('/editors', [EditorController::class, 'store'])->name('editors-store');
    Route::put('/editors/{id}/edit', [EditorController::class, 'edit'])->name('editors-edit');

    Route::get('/settings', [SettingController::class, 'index'])->name('settings');

    Route::get('/editors/status', [EditorController::class, 'status'])->name('editors-status');
});

