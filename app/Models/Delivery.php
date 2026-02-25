<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\User;
use App\Http\Models\Shipmentt;


class Delivery extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'userID',
        'vehicleType',
        'phoneNB',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'userID');
    }
    public function shippments(){
        return $this->hasMany(Shipment::class, 'deliveryID');
    }
}
