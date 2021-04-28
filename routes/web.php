<?php

use Illuminate\Support\Facades\Route;

/* Controller comment for method 1 of prodcutcontroller */
// use App\Http\Controllers;

/* Controller comment for method 2 of prodcutcontroller */
 use App\Http\Controllers\ProductController;

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
    return view('main');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('products','ProductController@index')->name('product.index');

/* method 1 of route in laravel 8 ProductController-index method */
// Route::get('products','App\Http\Controllers\ProductController@index')->name('product.index');

/* method 2 of route in laravel 8 ProductController-index method */
Route::get('products',[ProductController::class,'index'])->name('product.index');

/*method 2 of route in laravel 8 ProductController-create method */
Route::get('create',[ProductController::class,'create'])->name('create.product');

/*method 2 of route in laravel 8 ProductController-store method */
Route::post('store',[ProductController::class,'store'])->name('product.store');

/*method 2 of route in laravel 8 ProductController-edit method */
Route::get('edit/product/{id}',[ProductController::class,'edit']);

/*method 2 of route in laravel 8 ProductController-update method-update old enfo with new */
Route::post('update/product/{id}',[ProductController::class,'update']);

/*method 2 of route in laravel 8 ProductController-delete method */
Route::get('delete/product/{id}',[ProductController::class,'delete']);

/*method 2 of route in laravel 8 ProductController-show method */
Route::get('show/product/{id}',[ProductController::class,'show']);