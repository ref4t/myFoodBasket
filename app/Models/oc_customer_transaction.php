<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class oc_customer_transaction extends Model
{
    protected $primaryKey = 'customer_transaction_id ';
    protected $table = 'oc_customer_transaction';
    use HasFactory;


    public function addTransaction($customer_id, $data) {
		DB::select("INSERT INTO oc_customer_transaction SET customer_id = '" . $customer_id . "', order_id = 0 , description = '" . $data['description'] . "', amount = '" . $data['amount'] . "', date_added = NOW()");
	}
}
