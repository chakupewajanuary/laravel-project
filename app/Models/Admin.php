<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends  Authenticatable
{
    //
    use HasFactory;
    protected $table = 'admins';
    protected $primaryKey = 'adminID';
    protected $fillable = ['adminID', 'name', 'email','contactnumber','password']; // Columns that can be mass-assigned

}
