<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announces extends Model
{
    protected $fillable = [
        'brand_id', 'gene', 'price', 'pic', 'profile', 'user_id'
    ];

    public function brands()
    {

        return $this->belongsTo('App\Brands', 'brand_id');

    }

    public function user()
    {

        return $this->belongsTo(User::class);

    }



}
