<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Inventory extends Model
{
    protected $connection="mongodb";
    protected $table = 'inventory';
    /**
     * This creates fillable columns for the inventory table.
     */
    protected $fillable = [
        'quantity', 'price'
    ];
    public function meals()
    {
        return $this->belongsToMany(Meal::class);
    }
}
