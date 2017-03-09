<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{
    public function show($id)
    {

        $user = User::find($id);

        return view('users.show',compact('user'));

    }
}
