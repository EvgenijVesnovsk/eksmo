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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::prefix('books')->group(function () {
    Route::get('/', 'Api\v1\BookController@list');
    Route::get('{book}', 'Api\v1\BookController@get');
    Route::post('/', 'Api\v1\BookController@create');
    Route::put('{book}', 'Api\v1\BookController@update');
    Route::delete('{book}', 'Api\v1\BookController@delete');
});
