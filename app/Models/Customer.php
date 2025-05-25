<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable;
    
    protected $table = 'customers';
    protected $primaryKey = 'username'; // username is the primary key (integer ID)
    // public $incrementing = true; // Since username is an auto-increment ID
    protected $keyType = 'string';

    protected $fillable = ['username','email', 'address', 'phone', 'password'];
    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    // Tell Laravel to use email for authentication instead of the primary key
    public function getAuthIdentifierName()
    {
        return 'username';
    }

    // But use the primary key (username) as the actual identifier value
    public function getAuthIdentifier()
    {
        return $this->getKey(); // This returns the username (primary key)
    }

    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class, 'username', 'username');
    }

    
}