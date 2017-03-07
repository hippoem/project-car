<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genes extends Model
{
    protected $fillable = [
      'name', 'brands_id', 'categories_id'
  ];
}
