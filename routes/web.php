<?php

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

Route::get('/', 'DashboardController@index');
Route::get('/marketplace', 'MarketplaceController@index');
// Route::get('/auction', 'AuctionController@index');
Route::get('/login', 'LoginController@index');
Route::get('/detail', 'DetailController@index');

// Route::get('/', function () {

// })->middleware('cekLogin');

// Route::get('/', 'DashboardController@index');
// Route::get('/marketplace', 'MarketplaceController@index');
// // Route::get('/auction', 'AuctionController@index');
// Route::get('/login', 'LoginController@index');
// Route::get('/detail', 'DetailController@index');
// // Route::get('/detail', function () {
// //     return view('detail');
// // });
// Route::resource('/auction', 'AuctionController')->middleware('cekUser');

