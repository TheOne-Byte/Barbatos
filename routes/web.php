<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
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


Route::get('/register', [LoginController::class,'showRegistration'])->name('register');
Route::post('/register',[LoginController::class,'userRegister']);

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class,'userLogin']);


Route::get('/Homepage', [HomepageController::class, 'index']);

Route::post('/Search', [HomepageController::class, 'search'])->name('search');
Route::get('/Search', [HomepageController::class, 'searchPage']);

Route::get('/ProductDetail/{id}', [ProductController::class, 'product_detail']);
Route::post('/ProductDetail/{id}', [ProductController::class, 'cart']);

Route::get('/ProductbyCategory/{index}', [CategoryController::class, 'category']);

Route::middleware(['auth', 'CheckRole:admin'])->group(function () {
    Route::get('/ManageProduct',[ProductController::class,'ManageProduct'])->name('ManageProduct');
    Route::get('/Delete/{index}',[ProductController::class,'DeleteProduct']);
    Route::get('/UpdateProduct/{index}',[ProductController::class,'getUpdate']);
    Route::post('/UpdateProduct/{index}', [ProductController::class,'UpdateProduct']);
    Route::get('/AddProduct', [ProductController::class,'getProduct']);
    Route::post('/AddProduct', [ProductController::class,'AddProduct']);

});

Route::middleware(['auth'])->group(function () {
    Route::get('/Profile',[LoginController::class,'ProfileDetail']);
    Route::post('/logout',[LoginController::class, 'logout']);
});

Route::middleware(['auth', 'CheckRole:customer'])->group(function () {
    Route::get('/History', [TransactionController::class, 'history']);
    Route::get('/CartPage',[TransactionController::class,'ShoppingCart']);
    Route::get('/deletecart/{id}', [CartController::class, 'delete']);
});

// Route::get('/AddProduct', [CategoryController::class, 'dropdownCategory']);
// // masih ngak bisa karena belum buat koneksinya ke user
// Route::get('/Profilepage', [CategoryController::class, 'dropdownCategory']);
