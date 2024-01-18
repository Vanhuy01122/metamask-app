<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function home()
    {
        if (Auth::user() && Auth::check()) {
            return view('home', [
                'eth_address' => Auth::user()->eth_address,
                'nonce' => Str::random(24)
            ]);
        }
        return view('home');
    }
}
