<?php

namespace App\Http\Controllers;

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
            return redirect()->route('homepage');
        }
        else {
            return redirect()->back()->with('error', 'Nesprávne užívateľské meno alebo heslo');
        }
    }

    public function logout(Request $request) {
        auth()->logout();
        return redirect()->route('homepage');
    }
}