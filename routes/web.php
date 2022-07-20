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

Route::get('/create-post', [PostController::class, 'store'])->name('create-post');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/post/id', [PostController::class, 'viewPost'])->name('post');
Route::get('/admin/categories', [AdminController::class, 'categories'])->name('categories');
Route::get('/admin/home', [AdminController::class, 'index'])->name('home-dashboard');
Route::get('/admin/knowledge', [AdminController::class, 'knowledge'])->name('knowledge-poster');
Route::get('/admin/editor', [AdminController::class, 'editors'])->name('editors');
