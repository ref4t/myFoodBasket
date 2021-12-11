<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\oc_order_procduct;
class oc_order extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'order_id';
    protected $table = 'oc_order';

    public function getShopid(){
        return $this->hasMany('oc_order_product::class','order_id','order_id');
    }
}
