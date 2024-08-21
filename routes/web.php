<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', fn() => redirect('/landingPage'));
Route::get('/landingPage', [PostController::class, 'landingPage'] );
Route::get('/allPost', [PostController::class, 'allPost']);

Route::get('/login', fn() => view('pages.login') )->name('login')->middleware('guest');
Route::get('/register', fn() => view('pages.register') )->middleware('guest');
Route::post('/login', [UserController::class, 'login'])->middleware('guest');
Route::post('/register', [UserController::class, 'register'])->middleware('guest');
Route::post('/logout', [UserController::class, 'logout'] )->middleware('auth');

Route::get('/users', [UserController::class, 'index'])->middleware('admin');
// Route::get('/users/add', [UserController::class, 'create'])->middleware('admin');
// Route::post('/users', [UserController::class, 'store'])->middleware('admin');
Route::get('/users/edit/{user}', [UserController::class, 'edit'])->middleware('admin');
Route::put('/users/{user}', [UserController::class, 'update'])->middleware('admin');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->middleware('admin');

Route::get('/posts', [PostController::class, 'index'])->middleware('auth');
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::get('/myPosts', [PostController::class, 'myPosts'])->name('myPosts.index')->middleware('auth');
// Route::get('/posts/add', fn() => dd('post/add'))->middleware('auth');
Route::get('/myPosts/add', [PostController::class, 'create'])->middleware('auth');
Route::post('/myPosts', [PostController::class, 'store'])->middleware('auth');
Route::get('/myPosts/edit/{post}', [PostController::class, 'edit'])->middleware('auth');
Route::put('/myPosts/{post}', [PostController::class, 'update'])->middleware('auth');
Route::delete('/myPosts/{post}', [PostController::class, 'destroy'])->middleware('auth');
Route::get('/postsBy/{id}', [PostController::class, 'postsBy']);

// Route::resource('Post', PostController::class);