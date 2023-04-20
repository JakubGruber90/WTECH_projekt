<?php

namespace App\Models;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class UserSession {
    public $email = null;
    public $id = null;

    public function __construct($email) {
        $this->email = $email;
        $userDB = User::whereRaw("email = '" . $email . "'")->get()[0];
        $this->id = $userDB->id;
    }

    public function delete() {
        if ($this->email) {
            $this->email = null;
        }
        if ($this->id) {
            $this->id = null;
        }
    }
}