<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Carbon\Carbon;

use App\Models\oc_setting;
use App\Models\oc_delivery_settings;

class DeliveryController extends Controller
{
    public function index(Request $request){
        $store_id = $request->session()->get('store_id');
        $data = [];
        $delivery_settings = oc_delivery_settings::where('id_store', $store_id)->get();
        $settings=oc_setting::where('store_id','=',$store_id)->where('group','deliverysetting')->get();
        foreach ($settings as $result) {
            if( $result['key'] == 'enable_delivery' 
                || $result['key'] == 'delivery_option'
            ){
                if (!$result['serialized']) {
                    $data[$result['key']] = $result['value'];
                } else {
                    $data[$result['key']] = unserialize($result['value']);
                }
            }
        }



        foreach($delivery_settings as  $key=>$delivery){
            
            $delivery_settings[$key]->post_codes =  preg_split ("/\,/", trim($delivery->post_codes,''));
        }

        
        return Inertia::render('Admin/Settings/Delivery',[
            'delivery' => $delivery_settings,
            'settings' => $data,
        ]);
    }
}
