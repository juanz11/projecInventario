<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inventario', [ProductsController::class, 'index'])->name('.index');

Route::get('/add_inventario', [ProductsController::class, 'create'])->name('create');


Route::post('/save_product', [ProductsController::class, 'store'])->name('store.save_product');

Route::get('/product_delete/{id}', [ProductsController::class, 'destroy'])->name('destroy.product_delete');


