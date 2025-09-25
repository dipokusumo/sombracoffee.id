<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductRoastery extends Model
{
    protected $table = "product_roastery";
    public $timestamps = true;
    protected $guarded = ['id_product_roastery'];
}
