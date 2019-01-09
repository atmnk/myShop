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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/subcategory/for/{id}', 'SubCategoryController@forCategory');
Route::post('/product/search', 'ProductController@search');
Route::get('/variant/search/{product}/{size}/{color}', 'VariantController@search');
Route::resource('/product', 'ProductController');
Route::resource('/category', 'CategoryController');
Route::resource('/subcategory', 'SubCategoryController');
Route::resource('/brand', 'BrandController');
Route::resource('/color', 'ColorController');
Route::resource('/size', 'SizeController');
Route::resource('/variant', 'VariantController');
//
Route::get('/subcategory', 'ProductController@index');