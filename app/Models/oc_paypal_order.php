<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_paypal_order extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $table = 'oc_paypal_order';
    protected $primaryKey = 'paypal_order_id';

    use HasFactory;
}
