<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $connection="mongodb";
    protected $table = 'inventory';

    public function meals()
    {
        return $this->hasMany(Meal::class);
    }
}
