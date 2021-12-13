<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_zone extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'zone_id';
    protected $table = 'oc_zone';
    use HasFactory;
}
