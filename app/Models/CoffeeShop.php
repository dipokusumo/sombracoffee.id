<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoffeeShop extends Model
{
    protected $table = "coffee_shop";
    public $timestamps = true;
    protected $guarded = ['id_coffee_shop'];
}
