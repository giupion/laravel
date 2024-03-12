<?php

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

Route::get('/', function () {
    return view('welcome');
});



use App\Http\Controllers\ProdottoController;

Route::get('/prodotti', [ProdottoController::class, 'index'])->name('prodotti.index');
Route::get('/prodotti/create', [ProdottoController::class, 'create'])->name('prodotti.create');
Route::post('/prodotti', [ProdottoController::class, 'store'])->name('prodotti.store');
Route::get('/prodotti/{prodotto}', [ProdottoController::class, 'show'])->name('prodotti.show');
Route::get('/prodotti/{prodotto}/edit', [ProdottoController::class, 'edit'])->name('prodotti.edit');
Route::put('/prodotti/{prodotto}', [ProdottoController::class, 'update'])->name('prodotti.update');
Route::delete('/prodotti/{prodotto}', [ProdottoController::class, 'destroy'])->name('prodotti.destroy');
