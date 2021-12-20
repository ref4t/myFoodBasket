<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_language extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $table = 'oc_language';
    use HasFactory;
}
