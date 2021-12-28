<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Carbon\Carbon;

use App\Models\oc_store;
use App\Models\oc_setting;
use App\Models\oc_country;
use App\Models\oc_zone;
use App\Models\oc_language;
use App\Models\oc_currency;

class MapAndCategoryController extends Controller
{
    public function index(Request $request){
        $store_id =$request->session()->get('store_id');
        $data = [];
        $store = oc_store::where('store_id', $store_id)->first();
        $country = oc_country::all();
        $zone = oc_zone::all();
        $settings=oc_setting::where('store_id','=',$store_id)->where('group','=','config')->get();
        $languages = oc_language::all();
        $currency = oc_currency::all();

        foreach ($settings as $result) {
            if( $result['key'] == 'config_name' 
                || $result['key'] == 'curren_store_id' 
                || $result['key'] == 'config_url' 
                || $result['key'] == 'config_secure' 
                || $result['key'] == 'config_ssl' 
                || $result['key'] == 'config_owner' 
                || $result['key'] == 'config_address' 
                || $result['key'] == 'config_telephone'  
                || $result['key'] == 'config_zone_id'  
                || $result['key'] == 'map_post_code' 
                || $result['key'] == 'config_country_id' 
                || $result['key'] == 'map_ifram' 
                || $result['key'] == 'sitemap_url' 
                || $result['key'] == 'config_language' 
                || $result['key'] == 'config_currency' 
                || $result['key'] == 'config_title' 
                || $result['key'] == 'config_meta_description' 
                || $result['key'] == 'config_logo' 
                || $result['key'] == 'config_icon' 
                || $result['key'] == 'grecaptcha' 
                || $result['key'] == 'recaptcha_sitekey' 
                || $result['key'] == 'recaptcha_secret' 
                || $result['key'] == 'enable_booking_module' 
                || $result['key'] == 'file_directory_url' 
                || $result['key'] == 'service_charge' 
                || $result['key'] == 'config_email' 
                || $result['key'] == 'config_account_printer' 
                || $result['key'] == 'config_password_printer' 
                || $result['key'] == 'enable_ajax_checkout' 
                || $result['key'] == 'enable_res_api' 
                || $result['key'] == 'suspend_permanently' 
                || $result['key'] == 'suspend_time' 
                || $result['key'] == 'suspend_logo' 
                || $result['key'] == 'suspend_title' 
                || $result['key'] == 'suspend_description' 
            
            ){
                if (!$result['serialized']) {
                    $data[$result['key']] = $result['value'];
                } else {
                    $data[$result['key']] = unserialize($result['value']);
                }
            }
            
        }

        return Inertia::render('Admin/Settings/MapAndCategory',[
            'store' => $store,
            'data' => $data,
            'country' => $country,
            'zone' => $zone ,
            'language' => $languages ,
            'currency' => $currency ,
        ]);
    }

    public function update(Request $request){


        $data = $request['data'];

        foreach ($data as $key => $value) {

            
            $option = new oc_setting();
            $option->store_id = $data['curren_store_id'];
            $option->group = 'config';
            $option->key = $key;
            $option->value = $value;
            $option->serialized = 0;

            $option->save();
        }
        return redirect()->back();
    }
}
