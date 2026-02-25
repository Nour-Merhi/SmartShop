<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\OrderItems;
use App\Http\Models\Product;


class ProductOrderItems extends Model
{
    protected $primaryKey = 'productOrderItemID';
    protected $fillable = [
        'orderItemID', 
        'productID'
    ];

    public function orderItem() { 
        return $this->belongsTo(OrderItems::class, 'orderItemID'); 
    }
    public function product() { 
        return $this->belongsTo(Product::class, 'productID'); 
    }
}
