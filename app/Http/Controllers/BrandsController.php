<?php

namespace App\Http\Controllers;

use App\Brands;

class BrandsController extends Controller
{
    public function create()
    {

      return view('/admin.brands.create');

    }

    public function store()
    {

      Brands::create([
          'name' => request('name')
      ]);

      return redirect('/admin/brands/create');

    }
}
