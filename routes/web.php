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

Route::get('/home','NavController@home');
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
    Route::get("/apparel","NavController@Apparel");
    Route::get("/books","NavController@Books");
    Route::get("/cosmetics","NavController@Cosmetics");
    Route::get("/electronics","NavController@Electronics");
    Route::get("/fitness","NavController@Fitness");
    Route::get("/furniture","NavController@Furniture");
    Route::get("/gaming","NavController@Gaming");
    Route::get("/music","NavController@Music");
});

//Route::view('/animate','animatedBG');