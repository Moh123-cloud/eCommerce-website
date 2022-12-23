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

Route::get('/', function () {
    return view('welcome');
});

Route::view('login', 'login');

//Route for login page
Route::post('login', [UserController::class, 'login']);

//Route for product page
Route::get('product', [ProductController::class, 'index']);

//Route for details page
Route::get('detail/{id}', [ProductController::class, 'detail']);

//Route for add to cart page
Route::post('add_to_cart', [ProductController::class, 'addToCart']);