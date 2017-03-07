<?php

namespace App\Http\Controllers;

use App\Announces;

class AnnouncesController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth')->except(['show', 'index']);

    }

    public function index()
    {

        $announces = Announces::orderBy('price', 'asc')->get();

        return view('announces.index', compact('announces'));

    }

    public function create()
    {
      return view ('/announces.create');
    }

    public function store()
    {

      Announces::create([

          'brand' => request('brand'),

          'gene' => request('gene'),

          'price' => request('price'),

          'user_id' => auth()->id()

      ]);

      return redirect('/search');

    }

    public function show(Announces $announce)
    {

      return view('/announces.show', compact('announce'));

    }


}
