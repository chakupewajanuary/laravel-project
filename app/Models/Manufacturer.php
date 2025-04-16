<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'manufacturers';
    protected $primaryKey = 'manufacturer_id'; // ✅ Defines the primary key explicitly

    protected $fillable = ['manufacturer_id', 'name', 'country','contact_info','password'];
}
