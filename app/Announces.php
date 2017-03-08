<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announces extends Model
{
    protected $fillable = [
        'genes_id', 'price', 'pic', 'profile', 'user_id'
    ];

    public function genes ()
    {

        return $this->belongsTo('App\Genes');

    }

    public function categories ()
    {

        return $this->belongsTo('App\Categories');

    }

    public function user()
    {

        return $this->belongsTo(User::class);

    }



}
