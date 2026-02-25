<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CarItems;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request){
        $productID = $request->input('productID');
        $quantity = $request->input('quantity', 1);
        
        $customer = Auth::user()->customer;

        $cart = Cart::firstOrCreate(['customerID' => $customer->customerId]);

        $item = $cart->items()->where('productID', $productID)->first();
        if($item){
            $item->quantiy += $quantity;
            $item->save();
        }
        else {
            $cart->items()->create([
                'productID'=> $productID,
                'quantity'=> $quantity,
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart!');
    }
}
