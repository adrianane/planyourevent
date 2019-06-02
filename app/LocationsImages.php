<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationsImages extends Model
{
    protected $fillable = ['path'];

    //auto foreign_key: location_id (second param of belongsTo())
    //auto primary_key: id (third param of belongsTo())
    public function location() {
        return $this->belongsTo('App\Location');
    }
}
