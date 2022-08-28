<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
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



Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/posts/details/{post}', [PostController::class, 'show'])->name('post.details');



Route::middleware('auth')->group(function(){

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/posts/create', [PostController::class, 'create'])->name('admin.create');
    Route::post('/admin/post/save', [PostController::class, 'store'])->name('admin.store');
    Route::get('/admin/posts/', [PostController::class, 'index'])->name('admin.posts');
    Route::delete('/admin/posts/{post}', [PostController::class, 'destroy'])->name('admin.destroy');
    Route::patch('/admin/posts/{post}/update', [PostController::class, 'update'])->name('admin.update');
    Route::get('/admin/posts/{post}/edit', [PostController::class, 'edit'])->name('admin.edit');

    Route::get('/admin/user/{user}/profile',[UserController::class,'show'])->name('user.profile.show');
});

Route::get('/admin/posts/{post}/edit', [PostController::class, 'edit'])->middleware('can:view,post')->name('admin.edit');
// the other way to prevent editing posts from unwanted users
