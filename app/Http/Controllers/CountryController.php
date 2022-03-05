<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function create($id)
    {
        $country = new Country();
        $country->name = "Australia";
        $country->user_id = $id;
        $country->save();
    }

    public function show()
    {
        $countries = Country::with('user')->get();
        $users = User::with('country')->get();
        return view('user', compact('countries', 'users'));
    }
}
