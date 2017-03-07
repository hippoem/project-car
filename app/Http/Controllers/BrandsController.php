<?php

namespace App\Http\Controllers;

use App\Brands;

class BrandsController extends Controller
{
    public function index()
    {

      return view('/admin.brands.index');

    }

    public function store()
    {

      Brands::create([
          'name' => request('name')
      ]);

      return redirect('/admin/brands');

    }
}
