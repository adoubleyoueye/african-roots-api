<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Meal extends Model
{
    protected $connection="mongodb";
    protected $table = 'meals';
    /**
     * This creates fillable columns for the meals table.
     */
    protected $fillable = [
        'name', 'price', 'rating'
    ];
    public function users()
    /**
     * This shows that a user can have many meals and a meal can have many users.
     */
    {
     return $this->hasMany(User::class);
    }
    public function inventory()
    /**
     * This shows that a meal has many ingredients.
     */
    {
     return $this->belongsToMany('App\Inventory');
    }
}
