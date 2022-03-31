<?php

use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\User\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('checkout', [CheckOutController::class, 'placeOrder'])->name('checkout')->middleware('auth:sanctum');

Route::controller(AuthController::class)->group(function () {
    Route::post('user/authenticate', 'authenticate')->name('user.authenticate');
    Route::post('user/register', 'register')->name('user.register');
    Route::post('user/profile', 'updateProfile')->name('user.profile')->middleware('auth:sanctum');
});

Route::controller(ShopController::class)->group(function () {
    Route::get('shop/products', 'getProducts')->name('shop.products');
    Route::get('shop/product/{id}', 'getSingleProduct')->name('shop.product');
    Route::post('shop/product/comment', 'storeProductComment')->name('product.comment');
});

Route::post('contact', [PagesController::class, 'storeContactInquiry'])->name('contact.store');
