<?php

namespace App\Http\Controllers\Mainshop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\oc_delivery_settings;
use App\Models\oc_setting;
use App\Models\oc_store;
use App\Models\oc_store_review;

class ShopSearchController extends Controller
{
    public function search(){
        if(!request('zip')){
            $message= "Please Search Post Codes to View Restaurants";
            return Inertia::render('Mainshop/Home',['message' => $message]);
        }
        $zip=trim(str_replace(' ', '', request('zip')));
        $id_stores = oc_delivery_settings::select('id_store')->where('post_codes','LIKE','%'.$zip.'%')
        ->get();
        $data=[];
        if($id_stores->isNotEmpty()){
           // dd($id_stores);
            foreach($id_stores as $key=>$ids){
              // $data[$key]['store_name']=oc_store::select('name')->where('store_id','=',$ids->id_store)->first()->name;
              $data[$key]['store_id']=$ids->id_store;
                $settings=oc_setting::where('store_id','=',$ids->id_store)->where('group','=','config')->orWhere('group','=','deliverysetting')->get();
                foreach ($settings as $result) {
                    if (!$result['serialized']) {
                        $data[$key][$result['key']] = $result['value'];
                    } else {
                        $data[$key][$result['key']] = unserialize($result['value']);
                    }
                }
            }
        }
        else{
            $message= "Sorry we do not have any restaurants serving your area at the moment. Refer your local restaurants to us &amp; get £100 gift voucher from us. Contact us for more details today.";
            return Inertia::render('Mainshop/Home',['message' => $message, 'search' => request('zip')]);
        }
        //dd($data);
        return Inertia::render('Mainshop/restaurantList',['shops' => $data,'search' => request('zip')]);
    }
    public function singleShop($id){
        $data=[];
        $settings=oc_setting::where('store_id','=',$id)->where('group','=','config')->orWhere('group','=','deliverysetting')->get();
                foreach ($settings as $result) {
                    if (!$result['serialized']) {
                        $data[$result['key']] = $result['value'];
                    } else {
                        $data[$result['key']] = unserialize($result['value']);
                    }
                }
        $reviews = oc_store_review::where('store_id','=',$id)->get();
        
                // dd($data);
    return Inertia::render('Mainshop/singleRestaurant',['setting'=>$data,'review'=>$reviews]);

    }
}
