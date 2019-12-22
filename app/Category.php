<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	use SoftDeletes;


    public function books()
    {
        # code...
        return $this->belongsToMany('App\Book');
    }
}
