<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncesController extends Controller
{
    public function index()
    {
      return view ('/announces.index');
    }

    public function create()
    {
      return view ('/announces.create');
    }


}
