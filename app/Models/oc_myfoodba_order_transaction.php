<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_myfoodba_order_transaction extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'myfoodba_order_transaction_id';
    protected $table = 'oc_myfoodba_order_transaction';
    use HasFactory;
}
