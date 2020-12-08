<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\CountryController;
use  App\Http\Controllers\CityController;
use  App\Http\Controllers\CompanyController;
use  App\Http\Controllers\ContractController;
use  App\Http\Controllers\GoodController;
use  App\Http\Controllers\InvoiceController;
use  App\Http\Controllers\OfficeController;
use  App\Http\Controllers\SupplierController;
use  App\Http\Controllers\UserController;

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
})->name('home');


Route::resource('countries', CountryController::class);
Route::resource('cities', CityController::class);
Route::resource('companies', CompanyController::class);
Route::resource('contracts', ContractController::class);
Route::resource('goods', GoodController::class);
Route::resource('invoices', InvoiceController::class);
Route::resource('offices', OfficeController::class);
Route::resource('suppliers', SupplierController::class);
Route::resource('users', UserController::class);
