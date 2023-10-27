<?php

use App\Http\Controllers\ProductController;
use App\Models\Rice;
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

Route::view('/', 'pages.home', ['title' => 'Beranda'])->name('home');

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/update/{id}', [ProductController::class, 'updateScreen'])->name('product-update');
Route::post('/update/{id}', [ProductController::class, 'update'])->name('product-update-post');
Route::delete('/delete/{id}', [ProductController::class, 'delete'])->name('product-delete');
Route::get('/add',[ProductController::class,'addScreen'])->name('add-screen');
Route::post('/add',[ProductController::class,'add'])->name('add-screen-post');
