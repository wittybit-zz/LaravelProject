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
		    'link'=>'https://source.unsplash.com/collection/9686758/',
		    'path'=>'/categories/cosmetics'
		],
		[
			'name'=>'Electronics',
		    'link'=>'https://source.unsplash.com/collection/9686744/',
		    'path'=>'/categories/electronics'
		],
		[
			'name'=>'Apparel',
		    'link'=>'https://source.unsplash.com/collection/9686714/',
		    'path'=>'/categories/apparel'
		],
		[
			'name'=>'Books',
		    'link'=>'https://source.unsplash.com/collection/9686719/',
		    'path'=>'/categories/books'
		],
		[
			'name'=>'Fitness',
		    'link'=>'https://source.unsplash.com/collection/9686748/',
		    'path'=>'/categories/fitness'
		],
		[
			'name'=>'Furniture',
		    'link'=>'https://source.unsplash.com/collection/9686739/',
		    'path'=>'/categories/furniture'
		],
		[
			'name'=>'Gaming',
		    'link'=>'https://source.unsplash.com/collection/9686727/',
		    'path'=>'/categories/gaming'
		],
		[
			'name'=>'Music',
		    'link'=>'https://source.unsplash.com/collection/9686768/',
		    'path'=>'/categories/music'
		],

	];
});

Route::get('/categories/gaming',function(){
return[
	[
		'name'=>'Nintendo Switch',
		'link'=>'https://source.unsplash.com/dF2HZ-Kg34w/200x150',
		'description'=>'The latest console from Nintendo',
		'o_price'=>'555',
		'c_price'=>'555',
		'thumbs'=>[
			''
		]
	],
	[
		'name'=>'Play Station 4',
		'link'=>'https://source.unsplash.com/ePJUCF48vgo/200x150',
		'description'=>'The most selling console on the planet',
		'o_price'=>'222',
		'c_price'=>'221',
		'thumbs'=>[
			''
		]
	],
	[
		'name'=>'XBox One X',
		'link'=>'https://source.unsplash.com/P1CJmbRIfSk/200x150',
		'description'=>'The most selling console on the planet',
		'o_price'=>'522',
		'c_price'=>'291',
		'thumbs'=>[
			''
		]
	],
	[
		'name'=>'Desktop Gaming',
		'link'=>'https://source.unsplash.com/TErYPw4o1KM/200x150',
		'description'=>'Welcome to the master race',
		'o_price'=>'999',
		'c_price'=>'599',
		'thumbs'=>[
			''
		]
	]
];

});

Route::get('/categories/music',function(){
return[
	[
		'name'=>'Mi Earphone Basic',
		'link'=>'https://images-na.ssl-images-amazon.com/images/I/3101SoWr2eL._AC_SY700_FMwebp_.jpg',
		'description'=>'Mi Earphone Basic with Ultra deep bass and mic (Red)',
		'thumbs'=>[
			'https://images-na.ssl-images-amazon.com/images/I/71l4ostKUEL._SL1500_.jpg',
			'https://images-na.ssl-images-amazon.com/images/I/71a9QT1haPL._SL1500_.jpg',
			'https://images-na.ssl-images-amazon.com/images/I/71FTBt4aBQL._SL1500_.jpg',
			'https://images-na.ssl-images-amazon.com/images/I/71PR0FyvriL._SL1500_.jpg'
		],
		'o_price'=>'555',
		'c_price'=>'555',
	],
	[
		'name'=>'Play Station 4',
		'link'=>'https://source.unsplash.com/ePJUCF48vgo/600x400',
		'description'=>'The most selling console on the planet',
		'o_price'=>'555',
		'c_price'=>'555',
		'thumbs'=>[
			'https://images-na.ssl-images-amazon.com/images/I/71l4ostKUEL._SL1500_.jpg',
			'https://images-na.ssl-images-amazon.com/images/I/71a9QT1haPL._SL1500_.jpg',
			'https://images-na.ssl-images-amazon.com/images/I/71FTBt4aBQL._SL1500_.jpg',
			'https://images-na.ssl-images-amazon.com/images/I/71PR0FyvriL._SL1500_.jpg'
		],
	],
	[
		'name'=>'XBox One X',
		'link'=>'https://source.unsplash.com/P1CJmbRIfSk/600x400',
		'description'=>'The most selling console on the planet',
		'o_price'=>'555',
		'c_price'=>'555',
		'thumbs'=>[
			'https://images-na.ssl-images-amazon.com/images/I/71l4ostKUEL._SL1500_.jpg',
			'https://images-na.ssl-images-amazon.com/images/I/71a9QT1haPL._SL1500_.jpg',
			'https://images-na.ssl-images-amazon.com/images/I/71FTBt4aBQL._SL1500_.jpg',
			'https://images-na.ssl-images-amazon.com/images/I/71PR0FyvriL._SL1500_.jpg'
		],
	],
	[
		'name'=>'Desktop Gaming',
		'link'=>'https://source.unsplash.com/TErYPw4o1KM/600x400',
		'description'=>'Welcome to the master race',
		'o_price'=>'555',
		'c_price'=>'555',
		'thumbs'=>[
			'https://images-na.ssl-images-amazon.com/images/I/71l4ostKUEL._SL1500_.jpg',
			'https://images-na.ssl-images-amazon.com/images/I/71a9QT1haPL._SL1500_.jpg',
			'https://images-na.ssl-images-amazon.com/images/I/71FTBt4aBQL._SL1500_.jpg',
			'https://images-na.ssl-images-amazon.com/images/I/71PR0FyvriL._SL1500_.jpg'
		],
	]
];

});

Route::get('/categories/cosmetics',function(){
	include '../database/Products/db_cosmetics.php';
	return response()->json($db_cosmetics);
});
