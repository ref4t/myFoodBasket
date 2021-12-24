<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\oc_topping_size;

class oc_topping_cat_option extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $table = 'oc_topping_cat_option';
    use HasFactory;

    public function get_options(){
        return $this->hasMany(oc_topping_size::class,'id_category','id_category');
    }
}
