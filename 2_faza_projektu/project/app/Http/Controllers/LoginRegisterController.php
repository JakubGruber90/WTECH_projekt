<?php

namespace App\Http\Controllers;

class LoginRegisterController extends Controller {

    public function getLogin() {
        return view('login');
    }

    public function getRegister() {
        return view('registration');
    }
}