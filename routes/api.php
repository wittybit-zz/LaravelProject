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


Route::get('/home',function(){
	return[
		[
			'name'=>'PlayStation 4',
			'image'=>'Images/PS4.jpg',
			'heading'=>'The best-selling gaming console',
			'link'=>'/categories/gaming'

		],
		[
			'name'=>'Nike Sneakers',
			'image'=>'Images/nike.jpg',
			'heading'=>'Maximum style, maximum comfort',
			'link'=>'/categories/apparel'
		],
		[
			'name'=>'Designer Furniture',
			'image'=>'Images/furniture.jpg',
			'heading'=>'Make your house feel like home',
			'link'=>'/categories/furniture'
		],
		[
			'name'=>'Premium Cosmetics',
			'image'=>'Images/cosmetics.jpg',
			'heading'=>'Makeup for every occasion',
			'link'=>'/categories/cosmetics'
		]
	];
});


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
		'description'=>'The best-selling console on the planet',
		'o_price'=>'222',
		'c_price'=>'221',
		'thumbs'=>[
			''
		]
	],
	[
		'name'=>'XBox One X',
		'link'=>'https://source.unsplash.com/P1CJmbRIfSk/200x150',
		'description'=>'The best from microsoft',
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
	include '../database/Products/db_music.php';
	return response()->json($db_music);
});

Route::get('/categories/cosmetics',function(){
	include '../database/Products/db_cosmetics.php';
	return response()->json($db_cosmetics);
});

Route::get('/categories/electronics',function(){
	include '../database/Products/db_electronics.php';
	return response()->json($db_electronics);
});

Route::get('/categories/books',function(){
	include '../database/Products/db_books.php';
	return response()->json($db_books);
});

Route::get('/categories/apparel',function(){
	include '../database/Products/db_apparel.php';
	return response()->json($db_apparel);
});

Route::get('/categories/furniture',function(){
	include '../database/Products/db_furniture.php';
	return response()->json($db_furniture);
});

Route::get('/categories/fitness',function(){
	include '../database/Products/db_fitness.php';
	return response()->json($db_fitness);
});
