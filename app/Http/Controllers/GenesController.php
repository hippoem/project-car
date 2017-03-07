<?php

namespace App\Http\Controllers;

Use App\Genes;
Use App\Brands;
Use App\Categories;

class GenesController extends Controller
{
    public function index()
    {

        $brands = Brands::orderBy('name', 'asc')->get();

        $categories = Categories::all();

        return view('admin.genes.index', compact('brands', 'categories'));

    }

    public function store()
    {

        Genes::create([

            'name' => request('name'),

            'brands_id' => request ('brands_id'),

            'categories_id' => request ('categories_id')

        ]);

        return redirect('/admin/genes');

    }
}
