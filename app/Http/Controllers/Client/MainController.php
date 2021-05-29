<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('client.main');
    }

    public function getCategories()
    {
        $categoris = Category::all();
        return response()->json($categoris);
    }
}
