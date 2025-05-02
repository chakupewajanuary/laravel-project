<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //
    use HasFactory;

    protected $primaryKey = 'pr_id';  // specify custom primary key

    protected $fillable = ['name', 'time', 'st_id'];

    // Define relationship with Student
    public function student()
    {
        return $this->belongsTo(Student::class, 'st_id');
    }
}
