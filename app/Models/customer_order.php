<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer_order extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'customer_order';
    use HasFactory;
}
