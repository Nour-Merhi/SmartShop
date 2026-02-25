<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Http\Models\Admin;
use App\Http\Models\Customer;
use App\Http\Models\Delivery;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'User';
    protected $fillable = [
        'full_name',
        'email',
        'emailVerify',
        'password',
        'user_status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function admin(){
        return $this->hasOne(Admin::class, 'userID');
    }
    public function customer(){
        return $this->hasOne(Customer::class, 'userID');
    }
    public function delivery(){
        return $this->hasOne(Delivery::class, 'userID');
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
