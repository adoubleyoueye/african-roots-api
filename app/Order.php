<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Order extends Model
{
    protected $connection="mongodb";
    protected $table = 'orders';
    /**
     * This creates fillable columns for the inventory table.
     */
    protected $fillable = [
        'user_id', 'user_name', 'meal_id', 'order_number', 'order_status','customer_notes'
    ];
}
