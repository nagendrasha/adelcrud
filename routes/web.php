<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('index');
});

// Products Routes
Route::view('shop','shop');
Route::get('detail/{id}',[ProductController::class, 'detail']);
Route::get('shop',[ProductController::class, 'shop']);
Route::view('index', 'insert' );
Route::get('/',[ProductController::class, 'product_list']);
Route::post('insertData',[ProductController::class , 'insert']);
Route::get('index',[ProductController::class ,'readData']);
Route::view('update','updateview');
Route::get('updatedelete',[ProductController::class ,'updateordelete']);
Route::get('updatedata',[ProductController::class , 'update']);

