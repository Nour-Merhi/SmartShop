<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Product;
use App\Http\Models\Customer;


class ProductRating extends Model
{
    protected $primaryKey = 'ratingID';
    protected $fillable = [
        'productID',
        'customerID', 
        'rating', 
    ];
    
    public function product() { 
        return $this->belongsTo(Product::class, 'productID'); 
    }
    public function customer() {
        return $this->belongsTo(Customer::class, 'customerID');
    }
}