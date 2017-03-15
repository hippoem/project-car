<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genes extends Model
{
    protected $fillable = [
      'gene_name_eng', 'brand_id', 'category_id'
  ];

  public function announces()
  {

    return $this->hasMany('App\Announces');

  }

  public function categories()
  {

    return $this->belongsTo('App\Categories', 'category_id');

  }

  public function brands()
  {

    return $this->belongsTo('App\Brands', 'brand_id');

  }

}
