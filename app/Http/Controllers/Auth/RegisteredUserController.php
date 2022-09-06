<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Group;
use App\Models\Hduhau;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\Marital_status;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Session\Session;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()

    {
        //fixed content in database brought in via its models
        $countries = Country::all();
        $marital_statuses = Marital_status::all();
        $hduhaus = Hduhau::all();
        $groups = Group::all();

        //compact used to add content to this controller view
        return view('auth.register', compact('countries', 'groups', 'hduhaus', 'marital_statuses'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        //create a new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'country_id' => $request->country_id,
            'group_id' => $request->group_id,
            'marital_status_id' => $request->marital_status_id,
            'hduhau_id' => $request->hduhau_id,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'DOB' => $request->DOB,
            'occupation' => $request->occupation,
            'address' => $request->address,
            'state' => $request->state,
            'church' => $request->church,
            'pastor_name' => $request->pastor_name,
            'membership_year' => $request->membership_year,
        ]);

        //session for user
        event(new Registered($user));

        Auth::login($user);
        //redirect user

        // Session::flash('message', 'you have logged in');
        return redirect(RouteServiceProvider::HOME)->with('message', 'you have logged in successfully');
    }
}
