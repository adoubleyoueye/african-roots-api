<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Order extends Model
{
    protected $connection="mongodb";
    protected $table = 'orders';

    protected $fillable = [
        'user_id', 'user_name', 'meal_id', 'order_number', 'order_status','customer_notes'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function meals()
    {
        return $this->hasMany(Meal::class);
    }

}
