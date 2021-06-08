<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client\Favorite;
use App\Models\Client\Product;
use App\Models\Client\Message;
use App\Models\Client\Purchase;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug)
    {
        $productBySlug = Product::where('slug', $slug)->firstOrFail();
        $user_id = auth()->id();
        $favorited =  Favorite::where('user_id',$user_id)->where('product_id', $productBySlug->id)->count();
        $isPurchased = Purchase::where('user_id', $user_id)->where('product_id', $productBySlug->id)->count();
        return view('client.product', ['productBySlug'=> $productBySlug, 'user_id' => $user_id, 'favorited' => $favorited, 'isPurchased' => $isPurchased]);
    }

    public function sendMessage(Request $request)
    {
        $message = new Message();
        $message->user_id = $request->user_id;
        $message->receiver_id = $request->receiver_id;
        $message->title = $request->message_title;
        $message->message = $request->message_body;
        $message->save();
        return response()->json($message);
    }
}
