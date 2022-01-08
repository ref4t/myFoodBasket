<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\Models\oc_customer_ip;
use App\Models\oc_address;
use App\Models\oc_store;
use App\Models\oc_customer_group_description;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class oc_customer extends Authenticatable
{   
    use HasApiTokens, HasFactory, Notifiable;
    // protected $guard = 'customer';
    protected $primaryKey = 'customer_id';
    protected $table = 'oc_customer';
    protected $hidden = ['password'];
    protected $guarded = ['customer_id'];
    public $timestamps = false;

    public function getAddress(){
        return $this->hasMany(oc_address::class,'customer_id','customer_id');
    }
    public function getStore(){
        return $this->hasOne(oc_store::class,'store_id','store_id');
    }
    public function getGroup(){
        return $this->hasOne(oc_customer_group_description::class,'customer_group_id','customer_group_id');
    }

    public function store($customer, $address){
        DB::beginTransaction();
		try{
            DB::select("INSERT INTO oc_customer SET firstname = '" .($customer['firstname']) . "', lastname = '" .($customer['lastname']) . "', email = '" .($customer['email']) . "',password = '" .($customer['password']) . "',salt = 0, telephone = '" .($customer['telephone']) . "', fax = '" .($customer['fax']) . "', newsletter = '" . (int)$customer['newsletter'] . "', customer_group_id = '" . (int)$customer['customer_group_id'] . "', status = '" . (int)$customer['status'] . "',approved = 1,token = ' ', date_added = NOW()");
            $customer_id = DB::getPdo()->lastInsertId();
            DB::select("INSERT INTO oc_address SET  customer_id = '" . (int)$customer_id . "', firstname = '" .($address['firstname']) . "', lastname = '" .($address['lastname']) . "', company = '" .($address['company']) . "', company_id = '" .($address['company_id']) . "', tax_id = '" .($address['tax_id']) . "', address_1 = '" .($address['address_1']) . "', address_2 = '" .($address['address_2']) . "', city = '" .($address['city']) . "', postcode = '" .($address['postcode']) . "', country_id = '" . (int)$address['country_id'] . "', zone_id = '" . (int)$address['zone_id'] . "'");
            $address_id = DB::getPdo()->lastInsertId();
            DB::select("UPDATE oc_customer SET address_id = '" . (int)$address_id . "' WHERE customer_id = '" . (int)$customer_id . "'");
            
            return $customer_id;
            
        }catch (\Exception $e) {
            dd($e);
            DB::rollback();
            // something went wrong
        }
    }

    public function editCustomer($data, $password, $defaultAdd) {
        DB::beginTransaction();
		try{
            DB::select("UPDATE oc_customer SET firstname = '" .($data['firstname']) . "', lastname = '" .($data['lastname']) . "', email = '" .($data['email']) . "', telephone = '" .($data['telephone']) . "', fax = '" .($data['fax']) . "', newsletter = '" . (int)$data['newsletter'] . "', customer_group_id = '" . (int)$data['customer_group_id'] . "', status = '" . (int)$data['status'] . "' WHERE customer_id = '" . (int)$data['customer_id'] . "'");
            DB::select("UPDATE oc_customer SET address_id = '" . (int)$defaultAdd . "' WHERE customer_id = '" . (int)$data['customer_id'] . "'");
            
            
            if ($password) {
                $sql2="UPDATE `oc_customer` SET `password` = '" .$password. "' WHERE `oc_customer`.`customer_id` = " . (int)$data['customer_id'] ."";
                $po=DB::select($sql2);
              
            }
    
             DB::select("DELETE FROM oc_address WHERE customer_id = '" . (int)$data['customer_id'] . "'");
            
            
            if ($data['get_address']) {
                foreach ($data['get_address'] as $address) {
                     DB::select("INSERT INTO oc_address SET address_id = '" . (int)$address['address_id'] . "', customer_id = '" . (int)$data['customer_id'] . "', firstname = '" .($address['firstname']) . "', lastname = '" .($address['lastname']) . "', company = '" .($address['company']) . "', company_id = '" .($address['company_id']) . "', tax_id = '" .($address['tax_id']) . "', address_1 = '" .($address['address_1']) . "', address_2 = '" .($address['address_2']) . "', city = '" .($address['city']) . "', postcode = '" .($address['postcode']) . "', country_id = '" . (int)$address['country_id'] . "', zone_id = '" . (int)$address['zone_id'] . "'");
    
                    
                }
            }
        }catch (\Exception $e) {
            dd($e);
            DB::rollback();
            // something went wrong
        }

        
	}

    public function addAddress($address,$id) {
        $query = DB::statement("INSERT INTO oc_address SET  customer_id = '" . (int)$id . "', firstname = '" .($address['firstname']) . "', lastname = '" .($address['lastname']) . "', company = '" .($address['company']) . "', company_id = '" .($address['company_id']) . "', tax_id = ' ', address_1 = '" .($address['address_1']) . "', address_2 = '" .($address['address_2']) . "', city = '" .($address['city']) . "', postcode = '" .($address['postcode']) . "', country_id = '" . (int)$address['country_id'] . "', zone_id = '" . (int)$address['zone_id'] . "'");
         $adress_id = DB::getPdo()->lastInsertId();

         if($address['default'] == 1){
             DB::select("UPDATE `oc_customer` SET `address_id` = '" .$adress_id. "' WHERE `oc_customer`.`customer_id` = " . (int)$id ."");
         }
    }


}
