<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class oc_coupon extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'coupon_id';
    protected $table = 'oc_coupon';
    use HasFactory;

   

    public function addCoupon($data, $store_id)
    {
        DB::beginTransaction();
		try{
            DB::select("INSERT INTO oc_coupon SET name = '" . $data['name'] . "'
                , store_id='" . (int)$store_id . "'
                , code = '" . $data['code'] . "'
                , apply_shipping='" . (int)$data['apply_shipping'] . "'
                , discount = '" . (float)$data['discount'] . "'
                , type = '" . $data['type'] . "'
                , total = '" . (float)$data['total'] . "'
                , logged = '" . (int)$data['logged'] . "'
                , shipping = '" . (int)$data['shipping'] . "'
                , date_start = '" . $data['date_start'] . "'
                , date_end = '" . $data['date_end'] . "'
                , uses_total = '" . (int)$data['uses_total'] . "'
                , uses_customer = '" . (int)$data['uses_customer'] . "'
                , on_off = '" . (int)$data['on_off'] . "'
                , status = '" . (int)$data['status'] . "'
                , date_added = NOW()");

            $coupon_id = DB::getPdo()->lastInsertId();

            // if (isset($data['coupon_product']))
            // {
            //     foreach ($data['coupon_product'] as $product_id)
            //     {
            //         DB::select("INSERT INTO oc_coupon_product SET coupon_id = '" .
            //             (int)$coupon_id . "', product_id = '" . (int)$product_id . "'");
            //     }
            // }

            // if (isset($data['coupon_category']))
            // {
            //     foreach ($data['coupon_category'] as $category_id)
            //     {
            //         DB::select("INSERT INTO oc_coupon_category SET coupon_id = '" . (int)$coupon_id . "', category_id = '" . (int)
            //             $category_id . "'");
            //     }
            // }
            
        }catch (\Exception $e) {
            dd($e);
            DB::rollback();
            // something went wrong
        }
        
    }

    public function updateCoupon($data, $store_id)
    {
        DB::beginTransaction();
		try{
            DB::select("UPDATE oc_coupon SET name = '" . $data['name'] . "'
                , store_id='" . (int)$store_id . "'
                , code = '" . $data['code'] . "'
                , apply_shipping='" . (int)$data['apply_shipping'] . "'
                , discount = '" . (float)$data['discount'] . "'
                , type = '" . $data['type'] . "'
                , total = '" . (float)$data['total'] . "'
                , logged = '" . (int)$data['logged'] . "'
                , shipping = '" . (int)$data['shipping'] . "'
                , date_start = '" . $data['date_start'] . "'
                , date_end = '" . $data['date_end'] . "'
                , uses_total = '" . (int)$data['uses_total'] . "'
                , uses_customer = '" . (int)$data['uses_customer'] . "'
                , on_off = '" . (int)$data['on_off'] . "'
                , status = '" . (int)$data['status'] . "'
                , date_added = NOW() WHERE `oc_coupon`.`coupon_id` = " . (int)$data['coupon_id'] ."" );

            $coupon_id = DB::getPdo()->lastInsertId();

            // if (isset($data['coupon_product']))
            // {
            //     foreach ($data['coupon_product'] as $product_id)
            //     {
            //         DB::select("INSERT INTO oc_coupon_product SET coupon_id = '" .
            //             (int)$coupon_id . "', product_id = '" . (int)$product_id . "'");
            //     }
            // }

            // if (isset($data['coupon_category']))
            // {
            //     foreach ($data['coupon_category'] as $category_id)
            //     {
            //         DB::select("INSERT INTO oc_coupon_category SET coupon_id = '" . (int)$coupon_id . "', category_id = '" . (int)
            //             $category_id . "'");
            //     }
            // }
            
        }catch (\Exception $e) {
            dd($e);
            DB::rollback();
            // something went wrong
        }
        
    }
}
