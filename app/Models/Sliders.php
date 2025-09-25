<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    protected $table = "sliders";
    public $timestamps = true;
    protected $guarded = ['id_sliders'];
}
