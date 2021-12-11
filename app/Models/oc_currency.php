<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_currency extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'currency_id';
    protected $table = 'oc_currency';
    use HasFactory;
}
