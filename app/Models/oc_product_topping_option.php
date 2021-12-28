<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_product_topping_option extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $table = 'oc_product_topping_option';
    use HasFactory;
}
