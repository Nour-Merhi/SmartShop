<?php

namespace App\Models;
use App\Http\Models\Product;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'type',
    ];

    public function product(){
        return $this->hasMany(Product::class, 'categoryID');
    }
}
