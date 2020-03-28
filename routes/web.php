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
    return view('layout');
});

Route::view('/Header','layout');

Route::get('/home','NavController@home');
Route::get('/categories','NavController@categories');
Route::get('/cart','NavController@cart');
Route::get('/login','NavController@login');
Route::get('/signup','NavController@signup');
Route::get('/checkout','NavController@checkout');
Route::get('/contact','NavController@contact');
Route::get('/authenticate','NavController@authenticate');
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