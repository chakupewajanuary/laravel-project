<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table='orders';
    
    protected $primaryKey = 'OrderID';

    protected $fillable = [
        'OrderDate',
        'CustomerUsername',
        'Status',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'CustomerUsername', 'username');
    }
}
