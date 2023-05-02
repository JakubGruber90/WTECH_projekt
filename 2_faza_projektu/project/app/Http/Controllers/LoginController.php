<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CartController;
use App\Models\User;
use App\Models\UserSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;

class LoginController extends Controller {

    public function loginCheck(Request $request) {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $user = new UserSession($request->input('email'));
            $request->session()->put('user', $user);
            $request->session()->forget('cart');
            $load_cart = new CartController();
            $load_cart->getCartAuth($request);
            return redirect()->route('homepage');
        }
        else {
            return redirect()->back()->with('error', 'Nesprávne užívateľské meno alebo heslo');
        }
    }

    public function logout(Request $request) {
        auth()->logout();
        Session::get('user')->logout($request);
        return redirect()->route('homepage');
    }
}