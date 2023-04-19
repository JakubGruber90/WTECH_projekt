<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller {

    public function loginCheck(Request $request) {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('homepage');
        }
        else {
            return redirect()->back()->with('error', 'Nesprávne užívateľské meno alebo heslo');
        }
    }

}