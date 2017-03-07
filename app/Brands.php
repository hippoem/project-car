<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{

  protected $fillable = [
        'name'
  ];

  public function genes()
  {

    return $this->hasMany('App\Genes');

  }

  // public function announces()
  // {
  //
  //   // return $this->hasMany(Announces::class);
  //   return $this->hasMany('App\Announces');
  //
  // }
}
