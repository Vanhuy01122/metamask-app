<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Admin\Auth\Renderable;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $ethAddress = Str::lower($request->ethAddress);
        $message   = $request->message;
        $signature = $request->signature;

        $valid = \App\Helpers\EcRecover::personalVerifyEcRecover($message, $signature, $ethAddress);
        if (!$valid) {
            return response()->json(['message' => 'Invalid signature'], 401);
        }

        $admin = Admin::where('eth_address', $ethAddress)->first();

        if (!$admin) {
            $admin = new Admin;
            $admin->eth_address = $ethAddress;
            $admin->name = 'admin';
            $admin->password = 'admin123';
            $admin->save();
        }

        // Đăng nhập admin
        Auth::guard('admin')->login($admin);

        return response()->json(['message' => 'Admin login successful'], 200);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
