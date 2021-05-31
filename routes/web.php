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

//GET CATEGORY PAGES
Route::get('{slug}/aukcije', 'Client\CategoryPages\PagesController@getPage');

//PROFILE
Route::get('clan/{username}', 'Client\ProfileController@index')->name('showProfilePage');

//USER DATA
Route::get('mojlimundo/mojprofil', 'Client\UserDataController@index')->name('showUserDataPage');
Route::post('updateProfile/{id}', 'Client\UserDataController@updateProfile')->name('updateProfile');

