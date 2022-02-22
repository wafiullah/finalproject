<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\User\AuthController;

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


Route::post('user/authenticate', [AuthController::class, 'authenticate'])->name('user.authenticate');
Route::post('user/register', [AuthController::class, 'register'])->name('user.register');
Route::post('user/profile', [AuthController::class, 'updateProfile'])->name('user.profile')->middleware('auth:sanctum');

Route::get('shop/products', [ShopController::class, 'getProducts'])->name('shop.products');
Route::get('shop/product/{id}', [ShopController::class, 'getSingleProduct'])->name('shop.product');
Route::post('shop/product/comment', [ShopController::class, 'storeProductComment'])->name('product.comment');
Route::post('contact', [PagesController::class, 'storeContactInquiry'])->name('contact.store');

