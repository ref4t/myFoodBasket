<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class oc_customer_reward extends Model
{
    protected $primaryKey = 'customer_reward_id ';
    protected $table = 'oc_customer_reward';
    use HasFactory;

    public function addReward($customer_id, $data) {
		DB::select("INSERT INTO oc_customer_reward SET customer_id = '" . $customer_id . "', order_id = 0 , description = '" . $data['description'] . "', points = '" . $data['points'] . "', date_added = NOW()");
	}
}
