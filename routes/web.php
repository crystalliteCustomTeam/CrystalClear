<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;

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

Route::get('/creative/order/{name}/{email}/{phone}', [OrderController::class,'order']);


Route::post('/order-porcessing',[OrderController::class,'orderProcess']);
Route::get('/order-complete',[OrderController::class,'orderComplete']);


Route::get('/admin/login',[AdminController::class,'adminLogin']);
Route::get('/admin/register',[AdminController::class,'adminRegister']);



Route::get('/admin/dashboard',[AdminController::class,'adminDashboard']);