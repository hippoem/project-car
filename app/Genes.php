<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genes extends Model
{
    protected $fillable = [
      'name', 'brands_id', 'categories_id'
  ];

  public function announces()
  {

    return $this->hasMany('App\Announces');

  }

  public function categories()
  {

    return $this->belongsTo('App\Categories');

  }

  public function brands()
  {

    return $this->belongsTo('App\Brands');

  }

}
