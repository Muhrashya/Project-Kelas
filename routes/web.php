<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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



Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'home']);
Route::get('/fruits', [\App\Http\Controllers\FruitsController::class, 'index']);


Route::get('/shop', [\App\Http\Controllers\ShopController::class, 'index']);
Route::get('/shop/create', [\App\Http\Controllers\ShopController::class, 'create']);
Route::post('/shop/store', [\App\Http\Controllers\ShopController::class, 'store']);
Route::get('/detail/edit/{id}', [\App\Http\Controllers\ShopController::class, 'edit']);
Route::put('/detail/update/{id}', [\App\Http\Controllers\ShopController::class, 'update']);
Route::post('/detail/delete/{id}', [\App\Http\Controllers\ShopController::class, 'destroy']);
Route::get('/blog', [\App\Http\Controllers\ShopController::class, 'blog']);
Route::get('/crud', [\App\Http\Controllers\ShopController::class, 'crud']);
Route::get('/shopcart', [\App\Http\Controllers\ShoppingCartController::class, 'index']);
Route::get('/checkout', [\App\Http\Controllers\CheckOutController::class, 'index']);
Route::put('/checkout/bayar', [\App\Http\Controllers\CheckOutController::class, 'bayar']);
Route::get('/order/{id}', [\App\Http\Controllers\OrderanController::class, 'index']);
Route::put('/order/update/{id}', [\App\Http\Controllers\OrderanController::class, 'update']);

Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'index']);
// Route::post('/regis', [\App\Http\Controllers\RegisterController::class, 'regis']);
Route::post('/', [\App\Http\Controllers\RegisterController::class, 'regis']);

Route::post('/profile/create', [\App\Http\Controllers\ProfileController::class, 'store']);

Route::get('/fav', [\App\Http\Controllers\FavoriteController::class, 'index']);
Route::get('/love', [\App\Http\Controllers\FavoriteController::class, 'fav']);
Route::get('/logOUT', [\App\Http\Controllers\RegisterController::class, 'logout']);
Route::get('/logoutAdmin', [\App\Http\Controllers\RegisterController::class, 'logoutA']);
Auth::routes();

Route::get('/admin', [\App\Http\Controllers\Admin\DashboardController::class, 'index']);

// Route::group(['middleware' => ['auth', 'isAdmin'], 'prefix' => 'admin'], function () {
//     // Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
// });


//route Category
Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index']);
Route::get('/categories/create', [\App\Http\Controllers\CategoryController::class, 'create']);
Route::post('/categories/create', [\App\Http\Controllers\CategoryController::class, 'store']);
Route::post('/categories/delete/{id}', [\App\Http\Controllers\CategoryController::class, 'destroy']);

Route::get('/categories/edit/{id}', [\App\Http\Controllers\CategoryController::class, 'edit']);
Route::put('/categories/update/{id}', [\App\Http\Controllers\CategoryController::class, 'update']);

//route review
Route::get('/review', [\App\Http\Controllers\ReviewController::class, 'index']);
Route::get('/create/review', [\App\Http\Controllers\ReviewController::class, 'create']);
Route::post('/review/create', [\App\Http\Controllers\ReviewController::class, 'store']);

Route::get('/review/edit/{id}', [\App\Http\Controllers\ReviewController::class, 'edit']);
// Route::get('/review/update/{$id}', [\App\Http\Controllers\ReviewController::class, 'edit']);
Route::put('/review/update/{id}', [\App\Http\Controllers\ReviewController::class, 'update']);
Route::post('/review/delete/{id}', [\App\Http\Controllers\ReviewController::class, 'destroy']);

// Route::post('/review/delete/{$id}', [\App\Http\Controllers\ReviewController::class, 'destroy']);
// Route::resource('review', 'ReviewController');

//route product admin
Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index']);
Route::get('/create', [\App\Http\Controllers\ProductController::class, 'create']);
Route::post('/product/create', [\App\Http\Controllers\ProductController::class, 'store']);
Route::get('/product/edit/{id}', [\App\Http\Controllers\ProductController::class, 'edit']);
Route::put('/product/update/{id}', [\App\Http\Controllers\ProductController::class, 'update']);
Route::post('/product/delete/{id}', [\App\Http\Controllers\ProductController::class, 'destroy']);


Route::get('LaporanP', [\App\Http\Controllers\LaporanPenjualanController::class, 'index']);

//show
