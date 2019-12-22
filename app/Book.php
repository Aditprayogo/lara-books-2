<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	use SoftDeletes;

    public function categories(){

        return $this->belongsToMany('App\Category');

    }

    public function orders(){

        return $this->belongsToMany('App\Order');
        
    }
}
