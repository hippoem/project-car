<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    protected $fillable = [
        'category_name_eng'
    ];

    public function genes()
    {

      return $this->hasMany('App\Genes', 'category_id');

    }

}
