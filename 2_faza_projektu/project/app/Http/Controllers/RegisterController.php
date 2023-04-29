<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\RoleUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller {

    public function registerCheck(Request $request) {
        $input = $request->all();

        $rules = array('email' => 'unique:users,email');

        $validator = Validator::make($input, $rules);

        if(!isset($_POST['agree'])) {
            return redirect()->back()->with('error', 'Registrácia vyžaduje súhlas s obchodnými podmienkami');
        }
        else if ($input['password'] != $input['password2']) {
            return redirect()->back()->with('error', 'Heslá sa nezhodujú');
        }
        else if ($validator->fails()) {
            return redirect()->back()->with('error', 'Tento email sa už používa');
        }
        else {
           $user = User::create([
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'first_name' => $input['first_name'],
                'last_name' => $input['last_name'],
                'phone_number' => $input['phone_number'],
                'address' => $input['address'],
                'postal_code' => $input['city_code'],
                'city' => $input['city'],
                'country' => $input['country'],
            ]);

            RoleUser::create([
            'user_id' => $user->id,
            'role_id' => 2,]);

            return redirect()->route('homepage');
        }
    }

    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
}