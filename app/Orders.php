<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Orders extends Model
{   
    protected $connection="mongodb";
    protected $table = 'orders';
    /**
     * This creates fillable columns for the orders table.
     */
    protected $fillable = [
        'id', 'user_id', 'meal_id'
    ];

    public function order()
    {
     
    }
}
