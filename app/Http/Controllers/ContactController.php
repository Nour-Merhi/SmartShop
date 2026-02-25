<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function show(){
        return view('contact');
    }

    public function messageSubmit(Request $request){
        $request->validate([
            'name'=>'required|string',
            'email'=>'required|string',
            'subject'=>'required|string',
            'message'=>'required|string',
        ]);

        ContactMessage::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'subject'=> $request->subject,
            'message'=> $request->message,
        ]);

        return redirect()->route('contact');
    }
}
