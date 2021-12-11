<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'customer_id ';
    protected $table = 'oc_customer';
}
