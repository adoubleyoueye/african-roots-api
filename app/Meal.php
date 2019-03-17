<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Meal extends Model
{
    protected $connection="mongodb";
    protected $table = 'meals';

    protected $fillable = [
        'name', 'rating'
    ];
    public function meal()
    {
     
    }
}
