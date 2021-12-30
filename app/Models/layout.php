<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\slider;
use App\Models\gallery;
use App\Models\popular;
use App\Models\category;

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
    public function get_gallery(){
        return $this->hasMany(gallery::class,'store_id','store_id');
    }
    public function get_popular(){
        return $this->hasMany(popular::class,'store_id','store_id');
    }
    public function get_category(){
        return $this->hasMany(category::class,'store_id','store_id');
    }
}
