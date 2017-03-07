<?php

namespace App\Http\Controllers;

use App\Announces;

class AnnouncesController extends Controller
{
    public function index()
    {

        $announces = Announces::all();

        return view('announces.index', compact('announces'));

    }

    public function create()
    {
      return view ('/announces.create');
    }

    public function store()
    {

      Announces::create(request(['brand', 'gene', 'price']));

      return redirect('/search');
    }


}
