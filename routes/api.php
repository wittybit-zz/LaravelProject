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

Route::get('/categories',function(){
	return [
		[
			'name'=>'Cosmetics',
		    'link'=>'https://source.unsplash.com/collection/9686758/'
		],
		[
			'name'=>'Electronics',
		    'link'=>'https://source.unsplash.com/collection/9686744/'
		],
		[
			'name'=>'Apparel',
		    'link'=>'https://source.unsplash.com/collection/9686714/'
		],
		[
			'name'=>'Books',
		    'link'=>'https://source.unsplash.com/collection/9686719/'
		],
		[
			'name'=>'Fitness',
		    'link'=>'https://source.unsplash.com/collection/9686748/'
		],
		[
			'name'=>'Furniture',
		    'link'=>'https://source.unsplash.com/collection/9686739/'
		],
		[
			'name'=>'Gaming',
		    'link'=>'https://source.unsplash.com/collection/9686727/'
		],
		[
			'name'=>'Music',
		    'link'=>'https://source.unsplash.com/collection/9686768/'
		],

	];
});
