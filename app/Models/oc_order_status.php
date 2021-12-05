<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_order_status extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'order_status_id';
    protected $table = 'oc_order_status';
    use HasFactory;

    protected $fillable = [
    	'language_id','name'
    ];
}
