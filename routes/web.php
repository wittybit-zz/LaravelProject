<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

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
/*For mail*/
Route::get('sendmail', function () {

	$data = array('name'=>'Anmol','body'=>"Test Body",'subject'=>"Test subject123");

	Mail::to('ashu.empli5@gmail.com')->send(new SendMail($data));
	echo "Done !";
});

Route::get('pdfmail','MailController@sendmail');
Route::view('pdf','PDF.pdfInvoice');
/*Mail end here*/
Route::view('/','layout');

Route::view('/Header','layout');

Route::get('/home','NavController@home');
Route::get('/categories','NavController@categories');
Route::view('/cart','cart');
Route::get('/cart/add/{category}/{id}','ProductController@addItem');
Route::view('/profile','profile');
Route::view('/login','login')->name('login');
Route::view('/signup','signup');
Route::view('/checkout','checkout');
Route::view('/contact','contact');
Route::post('/authenticate','userController@verifyUser');
Route::get('/logout','userController@removeSession');
// Route::view('/categories/{?}','{?}');

Route::group(["prefix"=>"categories"], function() {
    Route::get("/","ProductController@categories");
    Route::get("/apparel","ProductController@Apparel");
    Route::get("/books","ProductController@Books");
    Route::get("/cosmetics","ProductController@cosmetics");
    Route::get("/electronics","ProductController@Electronics");
    Route::get("/fitness","ProductController@Fitness");
    Route::get("/furniture","ProductController@Furniture");
    Route::get("/gaming","ProductController@Gaming");
    Route::get("/music","ProductController@Music");
});
