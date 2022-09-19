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

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category-store');
    Route::put('/categories/{category}/edit', [CategoryController::class, 'changeStatus'])->name('category-changeStatus');

    Route::get('/knowledge', [PostController::class, 'index'])->name('knowledge-index');
    Route::get('/knowledge/create', [PostController::class, 'create'])->name('create-post');
    Route::post('/knowledge', [PostController::class, 'store'])->name('knowledge-store');

    Route::get('/editors', [EditorController::class, 'index'])->name('editors-index');
    Route::get('/editors/create', [EditorController::class, 'create'])->name('editors-create');
    Route::post('/editors', [EditorController::class, 'store'])->name('editors-store');
    Route::get('/editors/{editor}/edit', [EditorController::class, 'edit'])->name('editors-edit');
    Route::put('/editors/{editor}', [EditorController::class, 'edit'])->name('editors-update');

    Route::get('/settings', [SettingController::class, 'index'])->name('settings');

    Route::get('/editors/status', [EditorController::class, 'status'])->name('editors-status');
});

