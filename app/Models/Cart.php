<?php

namespace App\Models;
use App\Http\Models\Customer;
use App\Http\Models\CartItems;


use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $primaryKey = 'cartID';
    protected $fillable = ['customerID'];

    public function customer() { 
        return $this->belongsTo(Customer::class, 'customerID');
    }
    public function cartItems() {
        return $this->hasMany(CartItems::class, 'cartID'); 
    }
}
