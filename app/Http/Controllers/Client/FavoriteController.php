<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index()
    {
        $favorites = Favorite::with('products')->where('user_id', \auth()->id())->get();
        return view('client.favorites', ['favorites' => $favorites]);
    }

    public function addToFavorite(Request $request)
    {
        $addToFavorite = new Favorite();

        $addToFavorite->user_id = $request->user_id;
        $addToFavorite->product_id = $request->product_id;

        $addToFavorite->save();

        return response()->json($addToFavorite);
    }

    public function deleteFromFavorites(Request $request)
    {
        $deleteFavorite = Favorite::where('user_id', $request->user_id)->where('product_id', $request->product_id)->delete();
        return response()->json($deleteFavorite);
    }




}
