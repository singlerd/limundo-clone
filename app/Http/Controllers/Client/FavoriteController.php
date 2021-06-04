<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        return view('client.favorites');
    }

    public function addToFavorite(Request $request)
    {
        $addToFavorite = new Favorite();

        $addToFavorite->user_id = $request->user_id;
        $addToFavorite->product_id = $request->product_id;

        $addToFavorite->save();
    }
}
