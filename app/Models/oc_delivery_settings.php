<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class oc_delivery_settings extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;
    protected $table = 'oc_delivery_settings';
    
    public function checkZipcode($q)
    {   
        $q = trim(str_replace(' ', '', $q));
        $storelist = '';
        if($q)
        {
            $where = '0 ';
            for($i = 1; $i <= strlen($q); $i++)
            {
                $where .= 'OR `post_codes` like "%,'.substr($q, 0, $i).',%" ';
            }
            $sql = 'select id_store from `oc_delivery_settings` where '.$where;
            $query = DB::select($sql);
            return $query;
        }
        
        return false;
    }
}
