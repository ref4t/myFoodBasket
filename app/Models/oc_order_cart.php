<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_order_cart extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'order_cart_id';
    protected $table = 'oc_order_cart';
    use HasFactory;

    protected $fillable = [
    	'order_cart_id'
    ];
}
