<?php

namespace App\Http\Controllers\Mainshop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\oc_delivery_settings;
use App\Models\oc_setting;
use App\Models\oc_store;
use App\Models\oc_store_review;
use App\Models\oc_category_to_store;

class ShopSearchController extends Controller
{
    public function search(){
        if(!request('zip')){
            $message= "Please Search Post Codes to View Restaurants";
            return Inertia::render('Mainshop/Home',['message' => $message]);
        }
        $zip=trim(str_replace(' ', '', request('zip')));
        $id_stores=oc_delivery_settings::checkZipcode($zip);
        // dd($id_stores);
        // $id_stores = oc_delivery_settings::select('id_store','min_spend','name')->where('post_codes','LIKE','%'.$zip.'%')->get();
        $data=[];
        if(!empty($id_stores)){
           // dd($id_stores);
            foreach($id_stores as $key=>$ids){
              // $data[$key]['store_name']=oc_store::select('name')->where('store_id','=',$ids->id_store)->first()->name;
              $data[$key]['store_id']=$ids->id_store;
                $timeSetting=oc_setting::showtimeconfig($ids->id_store); 
                foreach($timeSetting as $t=>$time){
                    $data[$key][$t]=$time;
                }
                $reviewCount=oc_store_review::selectRaw('count(*) as total, AVG((quality+service+timing)/3) as point')->where('store_id','=',$ids->id_store)->where('status','=',1)->whereRaw('(quality+service+timing)/3 >= 4')->get();
                foreach($reviewCount as $r=>$review){
                    $data[$key]['total']=$review['total'];
                    $data[$key]['point']=$review['point'];
                }
                $settings=oc_setting::where('store_id','=',$ids->id_store)->where('group','=','config')->orWhere('group','=','deliverysetting')->get();
                foreach ($settings as $result) {
                    if($result['key'] == 'config_logo' || $result['key'] == 'config_name' || $result['key'] == 'config_address' || $result['key'] == 'config_telephone' || $result['key'] == 'config_ssl' ){
                    if (!$result['serialized']) {
                        $data[$key][$result['key']] = $result['value'];
                    } else {
                        $data[$key][$result['key']] = unserialize($result['value']);
                    }
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
        $delivery = oc_delivery_settings::select('name','min_spend')->where('id_store','=',$id)->get(); 
        $timeSetting=oc_setting::showtimeconfig($id); 
        // dd($timeSetting);
        $settings=oc_setting::where('store_id','=',$id)->where('group','=','config')->orWhere('group','=','deliverysetting')->get();
        $data['store_id']=$id;
                foreach ($settings as $result) {
                    if($result['key'] == 'config_logo' || $result['key'] == 'config_name' || $result['key'] == 'config_address' || $result['key'] == 'config_telephone' || $result['key'] == 'config_ssl' ){
                        if (!$result['serialized']) {
                            $data[$result['key']] = $result['value'];
                        } else {
                            $data[$result['key']] = unserialize($result['value']);
                        }
                    }
                }
        $reviews = oc_store_review::with('getCustomer')->where('store_id','=',$id)->where('status','=',1)->where('customer_id','!=', 0)->whereRaw('(quality+service+timing)/3 >= 4')->paginate(10);
        $reviewCount=oc_store_review::selectRaw('count(*) as total, AVG((quality+service+timing)/3) as point')->where('store_id','=',$id)->where('status','=',1)->whereRaw('(quality+service+timing)/3 >= 4')->get();
        $category=oc_category_to_store::with('getCategoryDescription')->join('oc_category', 'oc_category.category_id', '=', 'oc_category_to_store.category_id')->where('oc_category_to_store.store_id','=',$id)->orderBy('oc_category.sort_order','asc')->get();
        //  dd($category);
    return Inertia::render('Mainshop/singleRestaurant',['setting'=>$data,'review'=>$reviews,'timeSetting'=>$timeSetting,'reviewCount'=>$reviewCount,'category'=>$category]);

    }
    
     
}
