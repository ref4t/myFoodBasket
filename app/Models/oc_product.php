<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_product extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    protected $table='oc_product';
    protected $primaryKey='product_id';
}
