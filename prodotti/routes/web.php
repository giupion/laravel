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


use App\Http\Controllers\ProductController;

Route::get('/prodotti', [ProductController::class, 'index']);
Route::get('/prodotti/create', [ProductController::class, 'create']);
Route::post('/prodotti', [ProductController::class, 'store']);
Route::get('/prodotti/{prodotto}', [ProductController::class, 'show']);
Route::get('/prodotti/{prodotto}/edit', [ProductController::class, 'edit']);
Route::put('/prodotti/{prodotto}', [ProductController::class, 'update']);
Route::delete('/prodotti/{prodotto}', [ProductController::class, 'destroy']);