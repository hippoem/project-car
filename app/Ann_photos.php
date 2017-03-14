<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ann_photos extends Model
{

    protected $fillable = [
          'ann_photo'
    ];

    public function announces()
    {

      return $this->belongsTo('App\Announces', 'ann_id', 'id');

    }

}
