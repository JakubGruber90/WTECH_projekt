<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller {

    public function registerCheck(Request $request) {
        $input = $request->all();

        $rules = array('email' => 'unique:users,email');

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return redirect()->route('homepage');
        }
        else {
            User::create([
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'first_name' => $input['first_name'],
                'last_name' => $input['last_name'],
                'phone_number' => $input['phone_number'],
                'address' => $input['address'],
                'city' => $input['city'],
                'country' => $input['country'],
            ]);
            return redirect()->route('homepage');
        }
    }

}