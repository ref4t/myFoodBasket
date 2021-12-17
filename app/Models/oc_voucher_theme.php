<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\oc_voucher_theme_description;

class oc_voucher_theme extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'voucher_theme_id';
    protected $table = 'oc_voucher_theme';
    use HasFactory;

    public function get_name(){
        return $this->hasOne(oc_voucher_theme_description::class,'voucher_theme_id','voucher_theme_id');
    }
}
