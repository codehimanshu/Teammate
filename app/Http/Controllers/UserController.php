<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    public function show()
    {
        $users = User::with('games')->get();
        return view('users', compact('users'));
    }
}
