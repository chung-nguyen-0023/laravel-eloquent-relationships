<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getPhoneOfUser($id, Request $request) {
        $phone = User::find($id)->phone;
        return $phone;
    }
}
