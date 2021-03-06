<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProdukController::class, 'index'])->name('index');
Route::post('/', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/create', [ProdukController::class, 'create'])->name('produk.create');
Route::patch('/{produk}', [ProdukController::class, 'update'])->name('produk.update');
Route::delete('/{produk}', [ProdukController::class, 'destroy'])->name('produk.destroy');
Route::get('/{produk}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
