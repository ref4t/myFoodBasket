<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class oc_customer_history extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'customer_history_id ';
    protected $table = 'oc_customer_history';
    use HasFactory;

    public function addHistory($customer_id, $comment) {
      DB::select("INSERT INTO oc_customer_history SET customer_id = '" . $customer_id . "', comment = '" . $comment['comment'] . "', date_added = NOW()");
    }
}
