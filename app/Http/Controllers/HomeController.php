<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        $featuredProducts = Product::where('is_featured', true)->take(8)->get();
        $bestSellers = Product::where('sales_count', 'desc')->take(8)->get();

        return view('home', compact('featuredProducts', 'bestSellers'));
    }
}
