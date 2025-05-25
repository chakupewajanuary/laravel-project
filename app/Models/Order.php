<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'OrderID';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'OrderDate',
        'Status', 
        'username',
        'ProductID'
    ];

    protected $casts = [
        'OrderDate' => 'date',
    ];

    // Relationship with Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'username', 'username');
    }

    // Relationship with Product
    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class, 'ProductID', 'ProductID');
    }
}