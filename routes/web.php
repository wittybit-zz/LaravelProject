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

Route::view('/','layout');

Route::view('/Header','layout');

Route::view('/home','home');
Route::get('/categories','NavController@categories');
Route::view('/cart','cart');
Route::view('/login','login');
Route::view('/signup','signup');
Route::view('/checkout','checkout');
Route::view('/contact','contact');
Route::post('/authenticate','userController@verifyUser');
Route::get('/logout','userController@removeSession');
// Route::view('/categories/{?}','{?}');

Route::group(["prefix"=>"categories"], function() {
    Route::get("/","NavController@categories");
    Route::get("/Apparel","NavController@Apparel");
    Route::get("/Books","NavController@Books");
    Route::get("/Cosmetics","NavController@Cosmetics");
    Route::get("/Electronics","NavController@Electronics");
    Route::get("/Fitness","NavController@Fitness");
    Route::get("/Furniture","NavController@Furniture");
    Route::get("/Gaming","NavController@Gaming");
    Route::get("/Music","NavController@Music");
});

//Route::view('/animate','animatedBG');