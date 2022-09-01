<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    //show all countries
    public function index()
    {
        $countries = Country::all();
        return view('country', compact('countries'));
    }
}
