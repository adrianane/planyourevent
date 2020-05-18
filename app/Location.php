<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /*
    * create relation between location and images and
    * get the images of a location
    * auto foreign key: location_id
    *
    * NOTE: we can access relationship methods as if 
    * they were defined as properties on the model: App\Location::find(1)->locationImages
    */
    public function locationImages() 
    {
        return $this->hasMany('App\LocationsImages');
    }

    //create the following relation: a single location belongs to one user
    //the method can be used as a property: {{$location->user->name}}
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
