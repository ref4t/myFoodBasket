<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_customer_transaction extends Model
{
    protected $primaryKey = 'customer_transaction_id ';
    protected $table = 'oc_customer_transaction';
    use HasFactory;
}
