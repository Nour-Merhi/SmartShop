<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\WishList;
use App\Http\Models\Product;


class WishListItems extends Model
{
    protected $primaryKey = 'wishListItemID';
    protected $fillable = [
        'wishlistID', 
        'productID'
    ];


    public function wishlist() { 
        return $this->belongsTo(Wishlist::class, 'wishlistID'); 
    }
    public function product() { 
        return $this->belongsTo(Product::class, 'productID'); 
    }
}
