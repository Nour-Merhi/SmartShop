<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Cart;
use App\Http\Models\Product;


class CartItems extends Model
{
    protected $primaryKey = 'cartItemID';
    protected $fillable = [
        'cartID', 
        'productID', 
        'quantity'
    ];

    public function cart() { 
        return $this->belongsTo(Cart::class, 'cartID'); 
    }
    public function product() { 
        return $this->belongsTo(Product::class, 'productID'); 
    }
}
