<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table name
    protected $table = 'posts';
    
    //primary key
    public $primaryKey = 'id';

    //create relation: a single post belongs to a user 
    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
