<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoffeeOutlet extends Model
{
    protected $table = "coffee_outlet";
    public $timestamps = true;
    protected $guarded = ['id_coffee_outlet'];
}
