<?php

namespace App\Http\Controllers;

use App\Announces;
use App\User;
use App\Brands;

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

      $brands = Brands::orderBy('name', 'asc')->get();

      return view ('/announces.create', compact('brands'));
    }

    public function store()
    {

      Announces::create([

          'brand_id' => request('brand_id'),

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
