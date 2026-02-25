<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\Models\User;
use App\Http\Models\WishList;


use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'userID',
        'shipAddress',
        'shipPayment',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'userID');
    }

    public function wishList(){
        return $this->hasOne(WishList::class, 'customerID');
    }

    public function shippment(){
        return $this->hasMany(Shipment::class, 'customerID');
    }
    public function order(){
        return $this->hasMany(Order::class, 'customerID');
    }
    public function cart(){
        return $this->hasOne(Cart::class, 'customerID');
    }
    public function productRating(){
        return $this->hasMany(ProductRating::class, 'customerID');
    }
}
