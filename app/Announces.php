<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announces extends Model
{
    protected $fillable = [
         'gene_id', 'user_id', 'longitude', 'latitude'
        ,'number_plate', 'country_id', 'year', 'seats', 'doors', 'transmission', 'engine_type_id', 'fuel_type_id', 'mileage'
        ,'color_id'
        ,'description'
        // ,'cover'
        ,'condition'
        ,'booking_lead_time', 'pick_up_time_start', 'pick_up_time_end', 'max_days_notice', 'min_day', 'max_day'
        //calendar
        //, discount
        ,'price'
    ];

    public function genes ()
    {

        return $this->belongsTo('App\Genes', 'gene_id'); //FK

    }

    public function user()
    {

        return $this->belongsTo(User::class, 'user_id'); //FK

    }

    public function ann_photos ()
    {

      return $this->hasMany(Ann_photos::class, 'ann_id', 'id');

    }

}
