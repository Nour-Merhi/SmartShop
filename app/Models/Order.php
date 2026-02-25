<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Customer;
use App\Http\Models\Cart;
use App\Http\Models\OrderItems;
use App\Http\Models\Shipment;



class Order extends Model
{
    protected $primaryKey = 'orderID';
    protected $fillable = [
        'customerID', 
        'cartID', 
        'status', 
        'total'
    ];

    public function customer() { 
        return $this->belongsTo(Customer::class, 'customerID'); 
    }
    public function cart() { 
        return $this->belongsTo(Cart::class, 'cartID'); 
    }
    public function orderItems() { 
        return $this->hasMany(OrderItems::class, 'orderID'); 
    }
    public function shipment() { 
        return $this->hasOne(Shipment::class, 'orderID'); 
    }
}