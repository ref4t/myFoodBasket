<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class oc_voucher extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'voucher_id';
    protected $table = 'oc_voucher';
    use HasFactory;
    

}
