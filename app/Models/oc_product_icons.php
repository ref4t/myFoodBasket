<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_product_icons extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $table = 'oc_product_icons';
    use HasFactory;
}
