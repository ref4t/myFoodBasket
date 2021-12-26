<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\oc_product_description;

class oc_product_to_category extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    use HasFactory;
    protected $table = 'oc_product_to_category';

    
    public function getProductDescription(){
        return $this->hasOne(oc_product_description::class,'product_id','product_id')->with('sizeInfo')->join('oc_product', 'oc_product.product_id', '=', 'oc_product_description.product_id');
    }
}
