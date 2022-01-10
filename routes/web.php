<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SecretController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TranscationController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
});//->middleware(['auth'])->name('dashboard')

require __DIR__.'/auth.php';

//Routes for users
Route::get('users/index',[UserController::class,'index'])->name('users.index');
Route::get('users/create',[UserController::class,'create'])->name('users.create');

Route::post('api/fetch-states', [UserController::class, 'fetchState']);
Route::post('api/fetch-cities', [UserController::class, 'fetchCity']);
Route::post('users/store',[UserController::class,'store'])->name('users.store');
Route::get('users/edit/{id}',[UserController::class,'edit'])->name('users.edit');
Route::post('users/update/{id}',[UserController::class,'update'])->name('users.update');
Route::get('users/delete/{id}',[UserController::class,'delete'])->name('users.delete');

//Routes for products
Route::get('products/create',[ProductController::class,'create'])->name('products.create');
Route::post('products/store',[ProductController::class,'store'])->name('products.store');
Route::get('products/index',[ProductController::class,'index'])->name('products.index');
Route::get('products/edit/{id}',[ProductController::class,'edit'])->name('products.edit');
Route::post('products/update/{id}',[ProductController::class,'update'])->name('products.update');
Route::get('products/delete/{id}',[ProductController::class,'delete'])->name('products.delete');

//Routes for Roles
Route::get('roles/create',[RoleController::class,'create'])->name('roles.create');
Route::post('roles/store',[RoleController::class,'store'])->name('roles.store');
Route::get('roles/index',[RoleController::class,'index'])->name('roles.index');
Route::get('roles/edit/{id}',[RoleController::class,'edit'])->name('roles.edit');
Route::post('roles/update/{id}',[RoleController::class,'update'])->name('roles.update');
Route::get('roles/delete/{id}',[RoleController::class,'delete'])->name('roles.delete');

//Route for secrets
Route::get('secrets/index',[SecretController::class,'index'])->name('secrets.index');
Route::get('secrets/edit/{id}',[SecretController::class,'edit'])->name('secrets.edit');
Route::post('secrets/update/{id}',[SecretController::class,'update'])->name('secrets.update');
Route::get('secrets/delete/{id}',[SecretController::class,'delete'])->name('secrets.delete');

//routes for orders
Route::get('orders/index',[OrderController::class,'index'])->name('orders.index');
Route::get('orders/edit/{id}',[OrderController::class,'edit'])->name('orders.edit');
Route::post('orders/update/{id}',[OrderController::class,'update'])->name('orders.update');
Route::get('orders/delete/{id}',[OrderController::class,'delete'])->name('orders.delete');

//Routes for transcations
Route::get('transcations/index',[TranscationController::class,'index'])->name('transcations.index');
Route::get('transcations/edit/{id}',[TranscationController::class,'edit'])->name('transcations.edit');
Route::post('transcations/update/{id}',[TranscationController::class,'update'])->name('transcations.update');
Route::get('transcations/delete/{id}',[TranscationController::class,'delete'])->name('transcations.delete');


