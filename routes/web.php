<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

//Items
Route::get('/items', [ItemController::class, 'index'])->name('items');
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');
Route::get('/item/{id}', [ItemController::class, 'show'])->name('item.show');

//Categories
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
