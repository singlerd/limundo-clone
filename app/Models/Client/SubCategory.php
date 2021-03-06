<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Models\Client\Category');
    }

    public function products()
    {
        return $this->hasMany('App\Models\Client\Product');
    }
}
