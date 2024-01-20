<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class HomeController extends Controller
{
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
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
    public function sendBnb(Request $request)
    {
        $transaction = new Transaction([
            'from_address' => $fromAddress,
            'to_address' => $toAddress,
            'amount' => $amountToSend,
            'transaction_hash' => $txHash,
        ]);
        $transaction->save();
        return response()->json(['result' => $result, 'transaction' => $transaction]);
    }
}
