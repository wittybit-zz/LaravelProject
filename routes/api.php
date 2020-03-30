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

Route::get('/users','userController@getAllusers');

Route::get('/users/{id}','userController@getUser');

Route::post('/register','userController@createUser');

Route::post('/authenticate','userController@verifyUser');

Route::put('/users/{id}','userController@updateUser');

Route::delete('/users/{id}','userController@deleteUser');

Route::get('/categories',function(){
	return [
		[
			'name'=>'Cosmetics',
		    'link'=>'https://source.unsplash.com/collection/9686758/200x150'
		],
		[
			'name'=>'Electronics',
		    'link'=>'https://source.unsplash.com/collection/9686744/200x150'
		],
		[
			'name'=>'Apparel',
		    'link'=>'https://source.unsplash.com/collection/9686714/200x150'
		],
		[
			'name'=>'Books',
		    'link'=>'https://source.unsplash.com/collection/9686719/200x150'
		],
		[
			'name'=>'Fitness',
		    'link'=>'https://source.unsplash.com/collection/9686748/200x150'
		],
		[
			'name'=>'Furniture',
		    'link'=>'https://source.unsplash.com/collection/9686739/200x150'
		],
		[
			'name'=>'Gaming',
		    'link'=>'https://source.unsplash.com/collection/9686727/200x150'
		],
		[
			'name'=>'Music',
		    'link'=>'https://source.unsplash.com/collection/9686768/200x150'
		],

	];
});

Route::get('/categories/Gaming',function(){
return[
	[
		'name'=>'Nintendo Switch',
		'link'=>'https://source.unsplash.com/dF2HZ-Kg34w/200x150',
		'description'=>'The latest console from Nintendo',
		'o_price'=>'555',
		'c_price'=>'555',
	],
	[
		'name'=>'Play Station 4',
		'link'=>'https://source.unsplash.com/ePJUCF48vgo/200x150',
		'description'=>'The most selling console on the planet',
		'o_price'=>'222',
		'c_price'=>'221',
	],
	[
		'name'=>'XBox One X',
		'link'=>'https://source.unsplash.com/P1CJmbRIfSk/200x150',
		'description'=>'The most selling console on the planet',
		'o_price'=>'522',
		'c_price'=>'291',
	],
	[
		'name'=>'Desktop Gaming',
		'link'=>'https://source.unsplash.com/TErYPw4o1KM/200x150',
		'description'=>'Welcome to the master race',
		'o_price'=>'999',
		'c_price'=>'599',
	]
];

});

Route::get('/categories/Apparel',function(){
return[
	[
		'name'=>'Footwear',
		'link'=>'https://unsplash.com/photos/9X9gq92Ypyc/600x400',
		'description'=>'The latest console from Nintendo'
	],
	[
		'name'=>'Play Station 4',
		'link'=>'https://source.unsplash.com/ePJUCF48vgo/600x400',
		'description'=>'The most selling console on the planet'
	],
	[
		'name'=>'XBox One X',
		'link'=>'https://source.unsplash.com/P1CJmbRIfSk/600x400',
		'description'=>'The most selling console on the planet'
	],
	[
		'name'=>'Desktop Gaming',
		'link'=>'https://source.unsplash.com/TErYPw4o1KM/600x400',
		'description'=>'Welcome to the master race'
	]
];

});
