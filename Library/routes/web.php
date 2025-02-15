<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// Books Routes
Route::get('/', [BookController::class, 'index'])->name('books.index');
Route::get('/books/delete/{book}', [BookController::class, 'destroy'])->name('books.destroy');
Route::get('/new-book', [BookController::class, 'create'])->name('books.new');
Route::post('/store-book', [BookController::class, 'store'])->name('books.store');
Route::get('/search', [BookController::class, 'search'])->name('books.search');
Route::get('/books/edit/{book}', [BookController::class, 'edit'])->name('books.edit');
Route::post('/books/update', [BookController::class, 'update'])->name('books.update');

// Authors Routes
Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/authors/delete/{author}', [AuthorController::class, 'destroy'])->name('authors.destroy');
Route::get('/new-author', [AuthorController::class, 'create'])->name('authors.new');
Route::post('/store-author', [AuthorController::class, 'store'])->name('authors.store');
Route::get('/authors/search', [AuthorController::class, 'search'])->name('authors.search');
Route::get('/authors/edit/{author}', [AuthorController::class, 'edit'])->name('authors.edit');
Route::post('/authors/update', [AuthorController::class, 'update'])->name('authors.update');




