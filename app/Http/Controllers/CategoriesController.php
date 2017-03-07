<?php

namespace App\Http\Controllers;

use App\Categories;

class CategoriesController extends Controller
{
    public function index()
    {

      return view('admin.categories.index');

    }

    public function store()
    {

        Categories::create([

            'name' => request('name')

        ]);

        return redirect('/admin/categories');


    }
}
