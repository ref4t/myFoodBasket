<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_category extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'category_id';
    protected $table='oc_category';
    
}
