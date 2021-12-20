<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class oc_customer_ban_ip extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'customer_ban_ip ';
    protected $table = 'oc_customer_ban_ip';
    use HasFactory;

    public function insert($ip) {
        DB::select("INSERT INTO oc_customer_ban_ip SET ip = '" .$ip . "'");
      }
}
