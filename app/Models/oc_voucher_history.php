<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\oc_customer;

class oc_voucher_history extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'voucher_history_id';
    protected $table = 'oc_voucher_history';
    use HasFactory;

    public function get_order(){
        return $this->hasOne(oc_customer::class,'order_id','order_id');
    }
}
