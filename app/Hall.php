<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    //create relation:  many halls belongs to a location/restaurant
    //auto foreign_key: location_id (second param of belongsTo())
    //auto primary_key: id (third param of belongsTo())
    public function location()
    {
        return $this->belongsTo('App\Location');
    }
}
