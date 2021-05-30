<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDataController extends Controller
{
    public function index()
    {
        return view('client.user_data');
    }
}
