<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductGreenbean extends Model
{
    protected $table = "product_greenbean";
    public $timestamps = true;
    protected $guarded = ['id_product_greenbean'];
}
