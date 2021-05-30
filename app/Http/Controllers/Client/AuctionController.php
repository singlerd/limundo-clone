<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client\Category;
use App\Models\Client\SubCategory;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function index()
    {
        $categories = Category::with('subCategories')->get();
        return view('client.auction', ['categories' => $categories]);
    }

    public function getSubCategories()
    {
        $getSubCategories = SubCategory::where('category_id', 1)->get();
        return response()->json($getSubCategories);
    }

}
