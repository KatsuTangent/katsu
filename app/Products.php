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
