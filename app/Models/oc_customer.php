<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\oc_customer_ip;
use App\Models\oc_address;
use App\Models\oc_store;
use App\Models\oc_customer_group_description;

class oc_customer extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'customer_id ';
    protected $table = 'oc_customer';
    use HasFactory;

   
    public function getAddress(){
        return $this->hasMany(oc_address::class,'customer_id','customer_id');
    }
    public function getStore(){
        return $this->hasOne(oc_store::class,'store_id','store_id');
    }
    public function getGroup(){
        return $this->hasOne(oc_customer_group_description::class,'customer_group_id','customer_group_id');
    }


}
