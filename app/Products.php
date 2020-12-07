<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
  	protected $casts = [
    	'option' => 'array',
  	];

  	public function categories_sub()
  {
    return $this->hasMany('App\Categories_sub', 'id', 'cat_sub_id');
  }


}
// [
// 	{
// 		"option1" : "color",
// 		"option2" : "size",
// 		"optiondescription1" : ["red","black"],
// 		"optiondescription2" : ["S","M","L","XL"],
// 		"price" : ["100","100","120","120","100","100","120","120"],
// 		"stock" : ["1000","1000","1000","1000","1000","1000","1000","1000"],
// 		"weight" : ["1000","1000","1100","1100","1000","1000","1100","1100"],
// 		"sku" : ["001RS","001RM","001RL","001RX","001BS","001BM","001BL","001BX"],
// 	}
// ]