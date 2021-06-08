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
    Route::post('getCategoriesMain', 'Client\MainController@getCategories');
    Route::post('getSubCategoriesWithProducts', 'Client\MainController@getSubCategoriesWithProducts');
    Route::post('getRecommendedProducts', 'Client\MainController@getRecommendedProducts');

//AUCTION PAGE
    Route::post('getSubCategories', 'Client\AuctionController@getSubCategories');

//CATEGORY PAGES
    Route::post('getProducts', 'Client\CategoryPages\PagesController@getProducts');
    Route::post('getProductsForWomen', 'Client\CategoryPages\PagesController@getProductsForWomen');

//NEW AUCTION PAGE
    Route::post('addNewAuction', 'Client\NewAuctionController@addNewAuction');
    Route::post('listCategoriesForSelect', 'Client\NewAuctionController@listCategoriesForSelect');
    Route::post('listSubCategoriesForSelect', 'Client\NewAuctionController@listSubCategoriesForSelect');

//FAVORITES PAGE
    Route::post('addToFavorite', 'Client\FavoriteController@addToFavorite');
    Route::post('checkFavorite', 'Client\FavoriteController@checkFavorite');
    Route::post('deleteFromFavorites', 'Client\FavoriteController@deleteFromFavorites');

//PRODUCT PAGE
    Route::post('sendMessage', 'Client\ProductController@sendMessage');

//PURCHASE
    Route::post('purchaseProduct', 'Client\PurchaseController@purchaseProduct');


