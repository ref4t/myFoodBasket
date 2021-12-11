<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\oc_customer;

class oc_store_review extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'store_review_id ';
    protected $table = 'oc_store_review';

    public function getCustomer(){
        return $this->hasOne(oc_customer::class, 'customer_id', 'customer_id')->select(['customer_id', 'firstname','lastname']);
    }
}
