<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_product_to_store extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    use HasFactory;
    protected $table='oc_product_to_store';
}
