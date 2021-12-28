<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_user_group extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $table = 'oc_user_group';
    use HasFactory;
}
