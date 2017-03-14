<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{

  protected $fillable = [
        'brand_name_eng'
  ];

  public function genes()
  {

    return $this->hasMany('App\Genes');

  }

}
