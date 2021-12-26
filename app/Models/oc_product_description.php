<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\oc_topping_product_price_size;

class oc_product_description extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'product_id';
    protected $table = 'oc_product_description';
    public function sizeInfo(){
        return $this->hasMany(oc_topping_product_price_size::class,'id_product','product_id')->leftJoin('oc_topping_size','oc_topping_size.id_size','=','oc_topping_product_price_size.id_size');
    }
    public function toppingInfo(){
        // return $this->hasOne(oc_topping_product_price_size::class,'product_id','product_id')->join('oc_topping_size','oc_topping_size.id_size','=','oc_topping_product_price_size.id_size');
    }
}
