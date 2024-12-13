<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/producto', [ProductController::class, 'index'])->name('producto.index');

/*Crear nuevo producto*/
Route::get('/producto/create', [ProductController::class, 'create'])->name('producto.create');

/*Guardar nuevo producto*/
Route::post('/producto', [ProductController::class, 'store'])->name('producto.store');

Route::get('/producto/{id}', [ProductController::class, 'show'])->name('producto.show');

Route::get('/producto/{id}/edit', [ProductController::class, 'edit'])->name('producto.edit');

Route::put('/producto/{id}', [ProductController::class, 'update'])->name('producto.update');

Route::delete('/producto/{id}', [ProductController::class, 'destroy'])->name('producto.destroy');