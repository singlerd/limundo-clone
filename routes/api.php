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
//MAIN PAGE
Route::post('getCategories', 'Client\MainController@getCategories');

//AUCTION PAGE
Route::post('getSubCategories', 'Client\AuctionController@getSubCategories');

//CATEGORY PAGES
Route::post('getProducts', 'Client\CategoryPages\PagesController@getProducts');
