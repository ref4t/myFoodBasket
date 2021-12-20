<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_country extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'country_id';
    protected $table = 'oc_country';
    use HasFactory;
}
