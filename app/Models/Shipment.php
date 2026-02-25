<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Order;
use App\Http\Models\Delivery;
use App\Http\Models\Customer;


class Shipment extends Model
{
    protected $primaryKey = 'shipmentID';
    protected $fillable = [
        'orderID', 
        'deliveryID', 
        'customerID', 
        'status'
    ];

    public function order() { 
        return $this->belongsTo(Order::class, 'orderID'); 
    }
    public function delivery() { 
        return $this->belongsTo(Delivery::class, 'deliveryID'); 
    }
    public function customer() { 
        return $this->belongsTo(Customer::class, 'customerID'); 
    }
}

