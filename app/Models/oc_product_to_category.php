<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\oc_product_description;

class oc_product_to_category extends Model
{
    protected $table = 'oc_product_to_category';
    public function getProductDescription(){
        return $this->hasOne(oc_product_description::class,'product_id','product_id');
    }
}
