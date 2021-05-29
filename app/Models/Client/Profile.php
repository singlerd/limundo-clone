<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id', 'firstname', 'lastname', 'street', 'street_number', 'country', 'township', 'mobile_number'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
