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
        return view('home');
    }

    public function categories()
    {
        $request = Request::create('api/categories', 'GET');
        $response = Route::dispatch($request);
        return view('categories',['category'=>$response->original]);
    }

    public function cart()
    {
        return view('cart');
    }
    public function authenticate(Request $request){
        echo "AS";
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

    public function Apparel()
    {
        return view('apparel');
    }

    public function Books()
    {
        return view('books');
    }

    public function Cooks()
    {
        return view('cosmetics');
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
        $request = Request::create('api/categories/Gaming', 'GET');
        $response = Route::dispatch($request);
        return view('gaming',['data'=>$response->original]);
    }

    public function Music()
    {
        return view('music');
    }

    // public function inGaming()
    // {
    //     $request = Request::create('api/categories/Gaming', 'GET');
    //     $response = Route::dispatch($request);
    //     return view('categories/Gaming',['data'=>$response->original]);
    // }
    
}
