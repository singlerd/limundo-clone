<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function purchaseProduct(Request $request)
    {
        $purchase = new Purchase();
        $purchase->user_id = $request->user_id;
        $purchase->product_id = $request->product_id;
        $purchase->save();
        return response()->json($purchase);
    }
}
