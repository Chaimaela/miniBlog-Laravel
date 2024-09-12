<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get( '/posts', [PostController::class, 'index'])->name(name:'posts.index');

Route::get('/search', [PostController::class, 'search'])->name('blog.search');


Route::get( '/posts/create', [PostController::class, 'create'])->name(name:'post.create');
Route::post( '/posts', [PostController::class, 'store'])->name(name:'post.store');


Route::get( '/posts/{post}', [PostController::class, 'show'])->name(name:'post.show');
Route::get( '/posts/{post}/edit', [PostController::class, 'edit'])->name(name:'post.edit');

Route::put( '/posts/{post}', [PostController::class, 'update'])->name(name:'post.update');

Route::delete( '/posts/{post}', [PostController::class, 'destroy'])->name(name:'post.destroy');




