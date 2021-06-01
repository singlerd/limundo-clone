<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug)
    {
        $productBySlug = Product::where('slug', $slug)->firstOrFail();
        return view('client.product', ['productBySlug'=> $productBySlug]);
    }
}
