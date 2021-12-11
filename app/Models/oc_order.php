<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_order extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'order_id';
    protected $table = 'oc_order';
}
