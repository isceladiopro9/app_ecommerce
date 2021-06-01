<?php

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



Route::get('/',[App\Http\Controllers\MainController::class, 'home']);

Route::get('/carrito',[App\Http\Controllers\ShoppingCartsController::class,'index']);

Auth::routes();

Route::resource('products',App\Http\Controllers\ProductsController::class);

Route::resource('products_shopping_carts',App\Http\Controllers\ProductShoppingCartsController::class,[
		'only'=>['store','destroy']
	]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


