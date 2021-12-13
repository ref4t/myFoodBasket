<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_customer_ip extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'customer_ip_id ';
    protected $table = 'oc_customer_ip';
    use HasFactory;
}
