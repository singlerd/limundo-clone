<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function subCategory()
    {
        return $this->belongsTo('App\Models\Client\SubCategory');
    }

    public function favorites()
    {
        return $this->belongsTo('App\Models\Client\Favorite');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
