<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\oc_customer;

class oc_coupon_history extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'coupon_history_id';
    protected $table = 'oc_coupon_history';
    use HasFactory;

    public function get_customer(){
        return $this->hasOne(oc_customer::class,'customer_id','customer_id');
    }
}
