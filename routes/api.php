<?php

use Illuminate\Http\Request;

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::resource('/product', 'ProductController');
Route::resource('/category', 'CategoryController');
Route::resource('/promo', 'PromoController');
Route::resource('/testimonial','TestimonialController');
Route::resource('/transaction','TransactionController');
Route::resource('/admin', 'UserController');
Route::get('/category/{id}/all', 'CategoryController@subcategory');
Route::get('/sub', 'CategoryController@sub');
Route::get('/category/product/{id}','CategoryController@product');
Route::post('/cekuser', 'UserController@cekuser');
