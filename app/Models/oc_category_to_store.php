<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\oc_category_description;
use App\Models\oc_category;

class oc_category_to_store extends Model
{
    use HasFactory;
    protected $table="oc_category_to_store";
    public function getCategoryDescription(){
        return $this->hasOne(oc_category_description::class,'category_id','category_id')->withCount('getCategoryProduct');
    }
    public function getCategoryDescriptionWithProducts(){
        return $this->hasOne(oc_category_description::class,'category_id','category_id')->with('getCategoryProduct');
    }
    public function getCategoryStatus(){
        return $this->hasOne(oc_category::class,'category_id','category_id')->select('sort_order','status')->orderBy('sort_order','asc');
    }
}
