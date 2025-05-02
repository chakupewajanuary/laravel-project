<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    use HasFactory;

    protected $primaryKey = 'st_id';  // specify custom primary key

    protected $fillable = ['name', 'email'];

    // Define relationship with Program
    public function programs()
    {
        return $this->hasMany(Program::class, 'st_id');
    }
}
