<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\oc_category_description;

class oc_category extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'category_id';
    protected $table='oc_category';

    public function get_description(){
        return $this->hasOne(oc_category_description::class,'category_id','category_id');
    }
    
}
