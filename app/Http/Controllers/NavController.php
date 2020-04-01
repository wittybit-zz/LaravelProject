<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class NavController extends Controller
{
    //
    public function navigation()
    {
        return view('Header2');
    }

    public function home()
    {
        $categories = app('App\Http\Controllers\ProductController')->getCategories();
        $products = app('App\Http\Controllers\ProductController')->getProducts();
        return view('home',['category'=>$categories,'products'=>$products]);
    }

    public function cart()
    {
        return view('cart');
    }

    public function login()
    {
        return view('login');
    }

    public function contact()
    {
        return view('contact');
    }

    public function signup()
    {
        return view('signup');
    }

    public function checkout()
    {
        return view('checkout');
    }

    // public function inGaming()
    // {
    //     $request = Request::create('api/categories/Gaming', 'GET');
    //     $response = Route::dispatch($request);
    //     return view('categories/Gaming',['data'=>$response->original]);
    // }
    
}
