<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Order;
use App\Http\Models\ProductOrderItems;


class OrderItems extends Model
{
    protected $primaryKey = 'orderItemID';
    protected $fillable = ['orderID'];

    public function order() { 
        return $this->belongsTo(Order::class, 'orderID'); 
    }
    public function productOrderItem() { 
        return $this->hasOne(ProductOrderItems::class, 'orderItemID'); 
    }
}
