<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
use App\Http\Controllers\FoodController;


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


Route::get('/',[FoodController::class,'getIndexHome']);

Route::get('/admin',[FoodController::class,'getAdminAdd']);
Route::post('/admin',[FoodController::class,'postAdminAdd'])->name('admin-add-form');

Route::get('/showadmin',[FoodController::class,'getIndexAdmin']);

Route::get('/detail/{id}',[FoodController::class,'Detail']);

