<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client\Product;
use Illuminate\Http\Request;

class NewAuctionController extends Controller
{
    public function index()
    {
        return view('client.new_auction');
    }

    public function addNewAuction(Request $request)
    {
        $product = new Product();
        $product->sub_category_id = $request->sub_category_id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->product_state = $request->product_state;
        $product->lager = $request->lager;
        $product->price = $request->price;
        $product->slug = $request->slug;
       //HANDLING MULTIPLE FILES TODO
        if($request->hasfile('files'))
        {
            dd('if');

            foreach($request->file('files') as $file)
            {
                dd('ovde');
                $name = time().'.'.$file->extension();
                $file->move(public_path().'/files/', $name);
                $data[] = $name;

            }
        }
        $product->files=json_encode($data);
        $product->save();
        return response()->json($product);


    }
}
