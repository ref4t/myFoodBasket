<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_customer_group_description extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'customer_group_id';
    protected $table = 'oc_customer_group_description';
    use HasFactory;
}
