<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


// class Customer extends Model
class Customer extends Authenticatable
{
    //
    use HasFactory;
    protected $table = 'customers';
    protected $primaryKey= 'username';

    protected $fillable = ['username', 'email', 'address','phone','password']; // Columns that can be mass-assigned
    
    protected $hidden = [
        'password',
    ];

    public function orders()
    {
        // return $this->hasMany(Order::class, 'CustomerUsername', 'username');
        return $this->hasMany(Order::class, 'username');
    }

}
