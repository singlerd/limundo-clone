<?php

namespace App\Http\Controllers\Client\CategoryPages;

use App\Http\Controllers\Controller;
use App\Models\Client\Category;
use App\Models\Client\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PagesController extends Controller
{
    public function getPage($slug)
    {
        return view('client.category_pages.'.$slug);
    }

    public function getProducts()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function getProductsForWomen()
    {
        $productsForWomen = Product::where('sub_category_id', 1)->get();
        return response()->json($productsForWomen);
    }

}
