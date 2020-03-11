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
    return view('Header');
});

Route::view('/Header','layout');

Route::get('/home','NavController@home');
Route::get('/categories','NavController@categories');
Route::get('/cart','NavController@cart');
Route::get('/login','NavController@login');
Route::get('/signup','NavController@signup');
Route::get('/checkout','NavController@checkout');
