<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_order_history extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'order_history_id';
    protected $table = 'oc_order_history';
    use HasFactory;

    protected $fillable = [
    	'order_id','order_status_id','notify','comment'
    ];
}
