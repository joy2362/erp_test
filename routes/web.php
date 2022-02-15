<?php

use App\Http\Controllers\User\CustomerController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ProductController;
use App\Http\Controllers\User\SupplierController;
use App\Http\Controllers\User\UserController;
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
//dashboard
Route::get('/', [HomeController::class,"index"])->name('home');

//user manager
Route::get('/users/manage', [UserController::class,"index"])->name('user.manage');

//customer
Route::resource('customer', CustomerController::class);

//supplier resource
Route::resource('supplier', SupplierController::class);

//fetch state and city
Route::get('/state/fetch/{country}', [CustomerController::class,"fetchState"]);
Route::get('/city/fetch/{state}', [CustomerController::class,"fetchCity"]);

//show product page
Route::get('/product', [ProductController::class,"index"])->name('product.index');
