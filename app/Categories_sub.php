<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories_sub extends Model
{
    protected $table = 'categories_subs';

    public function categories()
    {
    	return $this->belongsTo('App\Categories', 'id', 'cat_id');
	}
}
