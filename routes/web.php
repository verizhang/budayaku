<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/articles/create', function () {
    return view('articles.create');
})->middleware(['auth', 'verified'])->name('article.create');

Route::get('/articles/edit/{id}', [ArticleController::class, 'edit'])->middleware(['auth', 'verified'])->name('article.edit');



Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/articles/create', [ArticleController::class, 'store'])->name('article.store');
    Route::put('/articles/update/{id}', [ArticleController::class, 'update'])->name('article.update');
    Route::delete("/articles/delete/{id}", [ArticleController::class, 'destroy'])->name('article.destroy');

});

require __DIR__.'/auth.php';
