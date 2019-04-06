<?php

namespace App\Model;
use App\Model\Reviews;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = [
		'name','detail','price','stock','discount','user_id'
	];
    public function reviews()
    {
    	return $this->hasMany(Reviews::class); 
    }
}
