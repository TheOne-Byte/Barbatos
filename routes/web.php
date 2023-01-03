<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Product;

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

Route::get('/Homepage', [HomepageController::class, 'index']);

Route::get('/login', [LoginController::class, 'showLogin']);
Route::post('/login', [LoginController::class,'userLogin']);
Route::get('/register', [LoginController::class,'showRegistration']);
Route::post('/register',[LoginController::class,'userRegister']);



Route::get('/ProductDetail/{id}', [ProductController::class, 'product_detail']);
Route::get('/ProductbyCategory/{index}', [CategoryController::class, 'category']);


Route::get('/AddProduct', [CategoryController::class, 'dropdownCategory']);

// masih ngak bisa karena belum buat koneksinya ke user
Route::get('/Profilepage', [CategoryController::class, 'dropdownCategory']);
