<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PhoneController;
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

Route::prefix('customer')->group(function () {

Route::get('/', [CustomerController::class,'index'])    ->name('all-customer');
Route::get('/create',       [CustomerController::class,'create'])   ->name('create-customer');
Route::post('/',            [CustomerController::class,'store'])    ->name('store-customer');
Route::get('/edit/{id}',    [CustomerController::class,'edit'])     ->name('edit-customer');
Route::get('/delete/{id}',  [CustomerController::class,'destroy'])  ->name('delete-customer');
Route::patch('/update/{id}',[CustomerController::class,'update'])   ->name('update-customer');


Route::get('/phone/{customer}/show',[PhoneController::class,'show'])   ->name('show-customerNo');
Route::get('/phone/{customer}/add', [PhoneController::class,'create'])   ->name('create-customerNo');
Route::post('/phone/{customer}',    [PhoneController::class,'store'])    ->name('store-customerNo');

});


