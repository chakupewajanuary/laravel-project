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
        'username',
        'Status',
    ];

    public function customer()
    {
        // return $this->belongsTo(Customer::class, 'CustomerUsername', 'username');
        return $this->belongsTo(Customer::class, 'username');

    }
}
