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
        return view('apparel');
    }

    public function Books()
    {
        return view('books');
    }

    public function cosmetics()
    {
    	$request = Request::create('api/categories/cosmetics', 'GET');
        $response = Route::dispatch($request);
        return view('gaming',['data'=>$response->original,'category'=>'cosmetics']);
    }

    public function Electronics()
    {
        return view('electronics');
    }

    public function Fitness()
    {
        return view('fitness');
    }

    public function Furniture()
    {
        return view('furniture');
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
