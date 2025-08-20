<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SellerOrderStat extends Model
{
    protected $table = 'ethni_orders'; // points to existing orders table
    protected $fillable = [
        'seller_id', 'product_id', 'product_name', 'price', 'quantity', 'subtotal', 'user_id'
    ];

    public $timestamps = false;
}
