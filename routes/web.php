<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//MAIN PAGE
Route::get('main', 'Client\MainController@index')->name('showMainPage');


//AUCTION PAGE
Route::get('auctions', 'Client\AuctionController@index')->name('showAuctionPage');
