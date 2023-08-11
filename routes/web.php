<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [PublicController::class, 'welcome'])->name('homepage');

// ROTTA CREAZIONE PRODOTTO PER FORM
Route::post('products/create', [ProductController::class, 'create'])->name('product.create');

// ROTTA STORE ARTICOLI
Route::get('/products/create', [ProductController::class, 'store'])->name('product.store');

// ROTTA EMAIL FORM
Route::post('/review', [PublicController::class, 'leaveReview'])->name('leave.review');

// ROTTA DETTAGLIO PRODOTTO
Route::get('/products/show/{product}', [ProductController::class, 'show'])->name('products.show');

// ROTTE UPDATE
Route::get('/products/update/{product}', [ProductController::class, 'update'])->name('products.update');
Route::put('/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');

// ROTTA DELETE
Route::delete('/product/delete/{product}', [ProductController::class, 'delete'])->name('product.delete');
