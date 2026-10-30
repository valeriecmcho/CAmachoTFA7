<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Display the User Accounts page using Eloquent.
     */
    public function index()
    {
        $users = User::all();

        return view('users', compact('users'));
    }
}

