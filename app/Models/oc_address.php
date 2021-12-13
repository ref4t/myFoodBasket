<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_address extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'address_id';
    protected $table = 'oc_address';
    use HasFactory;
}
