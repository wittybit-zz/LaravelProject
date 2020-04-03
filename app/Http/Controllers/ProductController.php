<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ProductController extends Controller
{
	public function addItem($category,$id){
		echo "<script>addItemToCart(".
		json_encode(['category'=>$category,'id'=>$id])
		.")</script>";
	}
	public function categories()
    {
        return view('categories',['category'=>$this->getCategories()]);
    }

    function getCategories(){
        $request = Request::create('api/categories', 'GET');
        $response = Route::dispatch($request);
        return $response->original;
    }

    function getProducts(){
        $request = Request::create('api/home', 'GET');
        $response = Route::dispatch($request);
        return $response->original;
    }

    public function Apparel()
    {
        $request = Request::create('api/categories/apparel', 'GET');
        $response = Route::dispatch($request);
        return view('gaming',['data'=>$response->original,'category'=>'apparel']);
    }

    public function Books()
    {
        $request = Request::create('api/categories/books', 'GET');
        $response = Route::dispatch($request);
        return view('gaming',['data'=>$response->original,'category'=>'books']);
    }

    public function cosmetics()
    {
    	$request = Request::create('api/categories/cosmetics', 'GET');
        $response = Route::dispatch($request);
        return view('gaming',['data'=>$response->original,'category'=>'cosmetics']);
    }

    public function Electronics()
    {
        $request = Request::create('api/categories/electronics', 'GET');
        $response = Route::dispatch($request);
        return view('gaming',['data'=>$response->original,'category'=>'electronics']);
    }

    public function Fitness()
    {
        $request = Request::create('api/categories/fitness', 'GET');
        $response = Route::dispatch($request);
        return view('gaming',['data'=>$response->original,'category'=>'fitness']);
    }

    public function Furniture()
    {
        $request = Request::create('api/categories/furniture', 'GET');
        $response = Route::dispatch($request);
        return view('gaming',['data'=>$response->original,'category'=>'furniture']);
    }

    public function Gaming()
    {
        $request = Request::create('api/categories/gaming', 'GET');
        $response = Route::dispatch($request);
        return view('gaming',['data'=>$response->original,'category'=>'gaming']);
    }

    public function Music()
    {
    	$request = Request::create('api/categories/music', 'GET');
        $response = Route::dispatch($request);
        return view('gaming',['data'=>$response->original,'category'=>'music']);
    }
}
