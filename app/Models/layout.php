<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\slider;

class layout extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'layout';
    use HasFactory;

    public function get_slider(){
        return $this->hasMany(slider::class,'store_id','store_id');
    }
}
