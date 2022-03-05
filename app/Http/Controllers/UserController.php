<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $countries = Country::with('user')->get();
        $users = User::with('country')->get();
        return view('user', compact('users', 'countries'));
    }
}
