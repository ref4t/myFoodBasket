<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_topping_size extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    use HasFactory;
    protected $table='oc_topping_size';
}
