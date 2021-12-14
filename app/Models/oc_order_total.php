<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_order_total extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'order_total_id';
    protected $table = 'oc_order_total';
    use HasFactory;
}
