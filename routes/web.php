<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TwitterController;
use \App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Show all posts
Route::get('/', [TwitterController::class, 'index'])->name('twitter.index');
//Show single post
Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');
//Edit post
Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
//Update post
Route::patch('/post/{post}', [PostController::class, 'update'])->name('post.update');
//Store post
Route::post('/post', [PostController::class, 'store'])->name('post.store');
//Delete post
Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
