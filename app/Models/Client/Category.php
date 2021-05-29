<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subCategories()
    {
        return $this->hasMany('App\Models\Client\SubCategory');
    }
}
