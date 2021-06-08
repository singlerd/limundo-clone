<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client\Favorite;
use App\Models\Client\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug)
    {

        $productBySlug = Product::where('slug', $slug)->firstOrFail();
        $user_id = auth()->id();
        $favorited =  Favorite::where('user_id',$user_id)->where('product_id', $productBySlug->id)->count();
        return view('client.product', ['productBySlug'=> $productBySlug, 'user_id' => $user_id, 'favorited' => $favorited]);
    }
}
