<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client\Category;
use App\Models\Client\Product;
use App\Models\Client\SubCategory;
use Illuminate\Http\Request;

class NewAuctionController extends Controller
{
    public function index()
    {
        $user_id = auth()->id();
        return view('client.new_auction', ['user_id' => $user_id]);
    }

    public function addNewAuction(Request $request)
    {
        $product = new Product();
        $product->sub_category_id = $request->sub_category_id;
        $product->user_id = $request->user_id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->product_state = $request->product_state;
        $product->lager = $request->lager;
        $product->price = $request->price;
        $toLowerSlug = strtolower($request->name);
        $replaceStr = str_replace(" ", "-",$toLowerSlug);
        $product->slug = $replaceStr;

        //HANDLING MULTIPLE CHECKBOXES FOR PAYMENT METHODS
        foreach ($request->payment_methods as $payment){
            $product->payment_methods = $payment;
        }

        //HANDLING MULTIPLE CHECKBOXES FOR SENDING METHODS
        foreach ($request->sending_methods as $sending){
            $product->sending_methods = $sending;
        }

        //HANDLING MULTIPLE IMAGES
        $data = array();
        if($request->hasfile('files'))
        {
            foreach ($request->file('files') as $file){
                $imagePath = $file;
                $imageName = time().'.'.$imagePath->getClientOriginalName();
                $imagePath->move(public_path('files'), $imageName);
                $data[] = $imageName;
            }
        }

        $product->files = json_encode($data);
        $product->save();
        return response()->json($product);
    }

    public function listCategoriesForSelect()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    public function listSubCategoriesForSelect()
    {
        $sub_categories = SubCategory::all();
        return response()->json($sub_categories);
    }
}
