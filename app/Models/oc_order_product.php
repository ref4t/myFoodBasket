<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_order_product extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'order_product_id';
    protected $table = 'oc_order_product';
    use HasFactory;

    protected $fillable = [
    	'order_id'
    ];
}
