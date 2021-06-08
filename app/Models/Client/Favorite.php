<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    public function user()
    {
        return $this->hasOne('App\User', 'id');
    }

    public function products()
    {
        return $this->hasMany('App\Models\Client\Product', 'id', 'product_id');
    }
}
