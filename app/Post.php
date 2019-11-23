<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Establish relationship between User and Post
    public function user() {
        return $this->belongsTo('App\User');
    }
}
