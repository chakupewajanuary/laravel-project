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

    protected $fillable = ['username', 'email', 'address','phone','password']; // Columns that can be mass-assigned
    // protected $primaryKey= 'username';

}
