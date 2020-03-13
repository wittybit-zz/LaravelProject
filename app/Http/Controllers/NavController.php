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
        return view('categories',['data'=>$response->original]);
    }

    public function cart()
    {
        return view('cart');
    }

    public function login()
    {
        return view('login');
    }

    public function signup()
    {
        return view('signup');
    }

    public function checkout()
    {
        return view('checkout');
    }
}
