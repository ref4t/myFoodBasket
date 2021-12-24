<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\oc_product_to_category;


class oc_category_description extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $table ='oc_category_description';
    
    public function getCategoryProduct(){
        return $this->hasMany(oc_product_to_category::class,'category_id','category_id')->with('getProductDescription');
    }
}
