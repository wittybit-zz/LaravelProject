<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('categories');
    }

    public function cart()
    {
        return view('cart');
    }

    public function login()
    {
        return view('login');
    }

    public function checkout()
    {
        return view('checkout');
    }
}
