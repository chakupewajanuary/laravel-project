<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $table = 'admins';
    protected $primaryKey = 'adminID';
    protected $fillable = ['adminID', 'name', 'email','contactnumber','password']; // Columns that can be mass-assigned

}
