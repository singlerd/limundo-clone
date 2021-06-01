<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client\Category;
use App\Models\Client\Product;
use App\Models\Client\SubCategory;
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

    public function getSubCategoriesWithProducts()
    {
        $subCategoriesWithProducts = SubCategory::with('products')->get();
        return response()->json($subCategoriesWithProducts);
    }

    public function getRecommendedProducts()
    {
        $recommendedProducts = Product::where('price', '<', 1000)->get();
        return response()->json($recommendedProducts);
    }

}
