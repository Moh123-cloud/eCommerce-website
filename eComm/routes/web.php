<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

//Route for register view
Route::view('register', 'register');

//Route for register page
Route::post('register', [UserController::class, 'register']);

//Route for login page
Route::post('login', [UserController::class, 'login']);

//Route for product page
Route::get('product', [ProductController::class, 'index']);

//Route for details page
Route::get('detail/{id}', [ProductController::class, 'detail']);

//Route for add to cart page
Route::post('add_to_cart', [ProductController::class, 'addToCart']);

//Route for cart list
Route::get('cartlist', [ProductController::class, 'cartList']);

//Route for Remove from cart
Route::get('removecart/{id}', [ProductController::class, 'removeCart']);

//Route for order now
Route::get('ordernow', [ProductController::class, 'orderNow']);


//Route for order place
Route::post('orderplace', [ProductController::class, 'orderPlace']);

//Route for order place
Route::get('myorders', [ProductController::class, 'myOrders']);