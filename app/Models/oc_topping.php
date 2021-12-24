<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\oc_topping_option;

class oc_topping extends Model
{
    protected $guarded = [];
    protected $table = 'oc_topping';
    use HasFactory;

    public function get_options(){
        return $this->hasMany(oc_topping_option::class,'id_group_topping','id_topping');
    }
    
}

