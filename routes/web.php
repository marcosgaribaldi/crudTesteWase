<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/products', [productController::class, 'index'])->name('products.index');
Route::get('/products/create', [productController::class, 'create'])->name('products.create');
Route::post('/products/store', [productController::class, 'store'])->name('products.store');
Route::get('/products/{product}/edit', [productController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [productController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [productController::class, 'destroy'])->name('products.destroy');








Route::get('/', function () {
    return view('welcome');
});
