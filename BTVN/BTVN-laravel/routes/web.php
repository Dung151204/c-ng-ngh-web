<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// Route để hiển thị danh sách bài viết
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Route để hiển thị form tạo bài viết mới
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

// Route để lưu bài viết mới vào cơ sở dữ liệu
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Route để hiển thị form chỉnh sửa bài viết
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Route để cập nhật bài viết trong cơ sở dữ liệu
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

// Route để xóa bài viết
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
