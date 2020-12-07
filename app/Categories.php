<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';

    public function categories_sub()
    {
        return $this->hasMany('App\Categories_sub', 'cat_id', 'id');
    }
}
