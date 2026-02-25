<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Customer;
use App\Http\Models\WishListItems;


class WishList extends Model
{
    protected $primaryKey = 'wishlistID';
    protected $fillable = ['customerID'];

    public function customer() { 
        return $this->belongsTo(Customer::class, 'customerID'); 
    }
    public function wishListItems() { 
        return $this->hasMany(WishlistItems::class, 'wishlistID'); 
    }
}
