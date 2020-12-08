<?php

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

Route::group(['prefix' => 'v1'], function () {
    
    Route::post('Categories/create', 'api\v1\CategoriesController@create');
    
    Route::post('Categories_sub/create', 'api\v1\CategoriesSubController@create');
    
    Route::post('Product/create', 'api\v1\ProductController@create');

    Route::post('Product/{id}', 'api\v1\ProductController@update');

    Route::post('Product/all', 'api\v1\ProductController@index');

    Route::get('/', function () {
        return response()->json('test !', 200);
    });

});