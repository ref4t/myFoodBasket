<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\oc_order_product;
use App\Models\customer_order;
use App\Models\oc_order_total;
class oc_order extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'order_id';
    protected $table = 'oc_order';

    public function getProducts(){
        return $this->hasMany(oc_order_product::class,'order_id','order_id');
    }
    public function getTotal(){
        return $this->hasMany(oc_order_total::class,'order_id','order_id');
    }
   
}
