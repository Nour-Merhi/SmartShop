<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function dashboard(){
        $admin = Admin::with('user')->get(); 

        $customers = Customer::with('user')->get();

        $deliveryMan = Delivery::with('user')->get();

        return view('adminDashboard', compact('admin','customers', 'deliveryMan'));
    }

    public function productFormSubmit(Request $request){
        $request->validate([
            'name'=>'required|string',
            'price'=>'required|numeric',
            'description'=>'required|string',
            'image1'=>'required|string',
            'image2'=>'nullable|string',
            'image3'=>'nullable|string',
            'image4'=>'nullable|string',
            'is_featured'=>'required|boolean',
            'sales_count'=>'required|integer|min:0',
        ]);

        $image1 = str_replace('public/', '', $request->input('image1'));
        $image2 = $request->image2 ? str_replace('public/', '', $request->input('image2')) : null;
        $image3 = $request->image3 ? str_replace('public/', '', $request->input('image3')) : null;
        $image4 = $request->image4 ? str_replace('public/', '', $request->input('image4')) : null;


        Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            'image1' => $image1,
            'image2' => $image2,
            'image3' => $image3,
            'image4' => $image4,
            'is_featured'=>$request->is_featured,
            'sales_count'=>$request->sales_count,
        ]);

        return redirect()->view('admin.dashboard')->with('success', 'product Added!');
    }

    public function createDeliveryAccount(Request $request){
        $request->validate([
            'full_name' =>'required|string',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
            'vehicleType'=> 'required|string',
            'phoneNb' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10'],
            'status'=>'required|in:available,onDelivery,inactive',
        ]);

        User::create([
            'full_name'=>$request->full_name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        Delivery::create([
            'vehicleType'=>$request->vehicleType,
            'phoneNb'=>$request->phoneNb,
            'deliveryStatus'=>$request->status,
        ]);
    }
}
