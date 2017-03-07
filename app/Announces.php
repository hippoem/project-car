<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announces extends Model
{
    protected $fillable = [
        'brand', 'gene', 'price', 'pic', 'profile', 'user_id'
    ];

    public function user()
    {

        return $this->belongsTo(User::class);

    }

}
