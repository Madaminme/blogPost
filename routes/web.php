<?php


use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\AdminController;

Route::get('/', [PostController::class, 'index'])->name('home');


Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);


Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

//Admin

Route::get('admin/posts/create', [AdminController::class, 'create'])->middleware('admin');
Route::post('admin/posts', [AdminController::class, 'store'])->middleware('admin');
Route::get('admin/posts', [AdminController::class, 'index'])->middleware('admin');
Route::get('admin/posts/{posts}/edit', [AdminController::class, 'edit'])->middleware('admin');
Route::patch('admin/posts/{posts}', [AdminController::class, 'update'])->middleware('admin');
Route::delete('admin/posts/{posts}', [AdminController::class, 'destroy'])->middleware('admin');
