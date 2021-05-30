<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function subCategory()
    {
        return $this->belongsTo('App\Models\Client\SubCategory');
    }
}
