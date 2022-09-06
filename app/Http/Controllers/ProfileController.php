<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Group;
use App\Models\Hduhau;
use App\Models\Marital_status;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as AuthUser;

class ProfileController extends Controller

{
    /**
     * get user information from auth and databse 
     *
     * */

    public function index()
    {


        // Get the currently authenticated user...
        $userprofile = Auth::user();

        //all dropdown fields
        $marital_statuses = Marital_status::all();
        $countries = Country::all();
        $hduhaus = Hduhau::all();
        $groups = Group::all();

        //user selected field
        $selectedCountry = Country::Where('id', $userprofile->country_id)->value('name');
        $selectedMarital_status = Marital_status::Where('id', $userprofile->marital_status_id)->value('name');
        $selectedHduhau = Hduhau::Where('id', $userprofile->hduhau_id)->value('name');
        $selectedGroup = Group::Where('id', $userprofile->group_id)->value('name');

        // dd($selectedCountry);

        return view('users.profile', compact('userprofile', 'selectedMarital_status', 'selectedGroup', 'selectedHduhau',  'selectedCountry'));
    }
    /**
     * Show edit form for user profile
     *
     * */

    public function edit()
    {

        // Get the currently authenticated user...
        $userprofile = Auth::user();

        //all dropdown fields
        $marital_statuses = Marital_status::all();
        $countries = Country::all();
        $hduhaus = Hduhau::all();
        $groups = Group::all();

        //user selected field
        // $selectedCountry = Country::Where('id', $userprofile->country_id)->value('name');
        // $selectedMarital_status = Marital_status::Where('id', $userprofile->marital_status_id)->value('name');
        // $selectedHduhaus = Hduhau::Where('id', $userprofile->hduhau_id)->value('name');
        // $selectedGroups = Group::Where('id', $userprofile->group_id)->value('name');

        // dd($selectedCountry);
        return view('users.edit', compact('userprofile', 'marital_statuses', 'groups', 'hduhaus',  'countries'));
    }





    //

    /**
     * Update certain information of user
     * 
     * 
     * */


    public function update(Request $request)
    {


        // Get the currently authenticated user...
        $userprofile = Auth::user()->id;

        //create a new user
        User::where('id', $userprofile)->update([
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'last_name' => $request->input('last_name'),
            'phone' => $request->input('phone'),
            'DOB' => $request->input('DOB'),
            'occupation' => $request->input('occupation'),
            'address' => $request->input('address'),
            'state' => $request->input('state'),
            'church' => $request->input('church'),
            'pastor_name' => $request->input('pastor_name'),
            'country_id' => $request->input('country_id'),
            'group_id' => $request->input('group_id'),
            'marital_status_id' => $request->input('marital_status_id'),
            'hduhau_id' => $request->input('hduhau_id'),


        ]);


        return redirect()->route(route: 'profile.index')->with('message', 'Profile updated successfully');
    }

    //

    /**
     * Update security nformation of user
     * 
     * 
     * */


    public function security(Request $request)
    {


        // Get the currently authenticated user...
        $userprofile = Auth::user()->id;

        //update password
        $updateProfile = User::where('id', $userprofile)->update([

            'password' => Hash::make($request->input('password')),


        ]);



        return redirect()->route(route: 'security')->with('message', 'Security updated successfully');
    }
    //

    /**
     * Update security information of user
     * */


    public function password(Request $request)
    {


        // Get the currently authenticated user...
        $userprofile = Auth::user()->id;
        // $userPassword = $request->input('password');

        if ($request->has('password')) {
            $userPassword = User::where('id', $userprofile)->update(['password' => bcrypt($request->input('password'))]);
        };

        //update email
        $updateProfile = User::where('id', $userprofile)->update([
            'email' => $request->input('email'),


        ]);


        return redirect()->route(route: 'security')->with('message', 'Security updated successfully');
    }

    //

    /**
     * Delete my user profile of user
     * */

    public function delete()
    {
        // Get the currently authenticated user...
        $userprofile = Auth::user()->id;
        // $deleteprofile = $userprofile::find()

        User::where('id', $userprofile)->delete();

        // $userprofile->delete();

        return redirect('/')->with('message', 'Your profile has been deleted successfully');
    }
}
