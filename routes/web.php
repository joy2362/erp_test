<?php

use App\Http\Controllers\User\CustomerController;
use App\Http\Controllers\User\HomeController;
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
Route::get('/customer/create', [CustomerController::class,"create"])->name('customer.create');
Route::post('/customer/store', [CustomerController::class,"store"])->name('customer.store');
Route::get('/customer/index', [CustomerController::class,"index"])->name('customer.index');

//supplier
Route::get('/supplier/create', [SupplierController::class,"create"])->name('supplier.create');
Route::post('/supplier/store', [SupplierController::class,"store"])->name('supplier.store');
Route::get('/supplier/index', [SupplierController::class,"index"])->name('supplier.index');

//fetch state and city
Route::get('/state/fetch/{country}', [CustomerController::class,"fetchState"]);
Route::get('/city/fetch/{state}', [CustomerController::class,"fetchCity"]);
