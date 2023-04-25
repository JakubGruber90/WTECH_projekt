<?php

namespace App\Models;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Session;

class UserSession {
    public $email = null;
    public $id = null;

    public function __construct($email) {
        $this->email = $email;
        $userDB = User::where("email", $email)->get()[0];
        $this->id = $userDB->id;
    }

    public function logout($request) {
        if ($this->email) $this->email = null;
        if ($this->id) $this->id = null;
        if (Session::get('cart')) $request->session()->forget('cart');

        $request->session()->forget('user');
    }

    public function delete($request) {
        $userDB = User::where("email", $this->email)->get()[0];
        $userDB->destroy();

        if ($this->email) $this->email = null;
        if ($this->id) $this->id = null;

        $request->session()->forget('user');
    }
}