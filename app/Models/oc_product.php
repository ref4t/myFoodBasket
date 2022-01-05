<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\oc_product_description;

class oc_product extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    protected $table='oc_product';
    protected $primaryKey='product_id';

    public function get_description(){
        return $this->hasOne(oc_product_description::class,'product_id','product_id');
    }
}
