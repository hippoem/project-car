<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_photos extends Model
{

    protected $fillable = [
        'user_photo'
    ];

    public function user()
    {

      return $this->belongsTo('App\User', 'user_id');

    }

}
