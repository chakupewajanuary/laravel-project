<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saler extends Model
{
     use HasFactory;
     // Specify the table associated with the model
     protected $table = 'salers';

     protected $fillable = ['name', 'email', 'address','phone']; // Columns that can be mass-assigned

}
