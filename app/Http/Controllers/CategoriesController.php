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

    public function category()
    {

        Categories::create([
            ['name' => 'CAR'],
            ['name' => 'VAN'],
            ['name' => '4WD'],
            ['name' => 'SUV'],
            ['name' => 'BIKE']
        ]);


        return redirect('/');


    }
}
