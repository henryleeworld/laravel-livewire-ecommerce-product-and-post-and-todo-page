<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Livewire\EditPost;
use App\Livewire\ProductsCreate;
use App\Livewire\ProductsEdit;
use App\Livewire\ShowPosts;
use App\Livewire\TodosList;
use App\Livewire\ViewPost;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('posts', ShowPosts::class)->name('posts');
Route::get('post/{post}/edit', EditPost::class)->name('posts.edit');
Route::get('post/{post}', ViewPost::class);

Route::get('todos', TodosList::class)->name('todos');

Route::get('products', [ProductController::class, 'index'])->name('products');
Route::get('products/create', ProductsCreate::class)->name('products.create');
Route::get('products/{product}/edit', ProductsEdit::class)->name('products.edit');

Route::get('users', [UserController::class, 'index'])->name('users.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
