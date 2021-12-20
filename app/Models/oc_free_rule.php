<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_free_rule extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $table = 'oc_free_rule';
    use HasFactory;
}
