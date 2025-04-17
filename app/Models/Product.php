<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'ProductID';

    protected $fillable = ['ProductID', 'name', 'Description','Price','stock','Picture','manufacturer_id']; // Columns that can be mass-assigned

    
}
