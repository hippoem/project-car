<?php

namespace App\Http\Controllers;

use App\Announces;
use App\User;
use App\Genes;
use App\Brands;
use App\Categories;

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

      $genes = Genes::orderBy('name', 'asc')->get();

      $categories = categories::all();

      return view ('/announces.create', compact('genes', 'brands', 'categories'));
    }

    public function store()
    {

      Announces::create([

          'genes_id' => request('genes_id'),

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
