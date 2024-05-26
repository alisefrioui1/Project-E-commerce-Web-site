<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_name', 
        'client_email', 
        'delivery_address', 
        'order_date', 
        'status'
    ];
    public function orderLines()
    {
        return $this->hasMany(OrderLine::class);
    }
}
