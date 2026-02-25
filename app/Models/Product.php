<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\ProductOrderItems;
use App\Http\Models\ProductRating;
use App\Http\Models\CartItems;
use App\Http\Models\WishListItems;


class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'productID';
    protected $fillable = [
        'name',
        'price',
        'description',
        'image1',
        'image2',
        'image3',
        'image4',
        'categoryID'
    ];

    public function category(){
        return $this->belongsTo(Product::class, 'categoryID');
    }
    public function productRating(){
        return $this->hasMany(ProductRating::class, 'productID');
    }
    public function cartItems(){
        return $this->hasMany(CartItems::class, 'productID');
    }
    public function productOrderItem(){
        return $this->hasMany(ProductOrderItems::class, 'productID');
    }
    public function wishListItems(){
        return $this->hasMany(WishListItems::class, 'productID');
    }
}
