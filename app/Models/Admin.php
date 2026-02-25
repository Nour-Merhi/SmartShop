<?php

namespace App\Models;
use App\Http\Models\User;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'userID',
        'phoneNB',
        'permissions',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'userID');
    }
    public function contactMessage(){
        return $this->belongsTo(ContactMessage::class, 'contacterID');
    }
}
