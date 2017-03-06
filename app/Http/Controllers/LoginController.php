<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function __construct()
    {

        $this->middleware('guest', ['except' => 'destroy']);

    }

    public function index()
    {
        return view('/auth.login');
    }

    public function store()
    {

        // Attempt to authenticate ther user.

        //if (Auth::attempt(request(['email', 'password']))) {

        if(! auth()->attempt(request(['email', 'password']))){
            return back()->withErrors([
              'message' => 'ข้อมูลของคุณไม่ถูกต้อง'

              ]);

        }

        return redirect()->home();

    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }
}
