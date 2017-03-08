<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('/auth.register');
    }

    public function store()
    {
        // dd(request('firstname'));
        // validate the form.

        $this->validate(request(), [

            'firstname' => 'required',

            'lastname' => 'required',

            'email' => 'required|email',

            'password' => 'required|confirmed',

            'mobile' => 'required'

        ]);

        // Create and save the user.
        //$password = Hash::make('yourpassword');
        //bcrypt

        $user = User::create(request(['firstname', 'lastname', 'email', 'password','mobile']));


        // Sign them it.

        auth()->login($user);

        // Redirect to the home page.

        // return redirect()->home();
        return redirect('/');
    }
}
