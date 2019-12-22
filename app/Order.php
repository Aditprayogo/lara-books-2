<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

	protected $fillable = [
		'user_id',
		'total_price',
		'invoice_number',
		'status'
	];

	public function user()
    {
        # code...
        return $this->belongsTo('App\User');
    }

    public function books(){

        // karena kita juga ingin mengambil quantiti dari db tersebut
        return $this->belongsToMany('App\Book')->withPivot('quantity');;

    }

    public function getTotalQuantityAttribute(){
        $total_quantity = 0;
       
        foreach($this->books as $book){

            $total_quantity += $book->pivot->quantity;

        }

        return $total_quantity;
        
       }
}
