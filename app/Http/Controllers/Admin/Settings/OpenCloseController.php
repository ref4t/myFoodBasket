<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Carbon\Carbon;

use App\Models\oc_setting;

class OpenCloseController extends Controller
{
    public function index(Request $request) {

        $store_id = $request->session()->get('store_id');
        $data = [];
        $settings=oc_setting::where('store_id','=',$store_id)->get();
        

        foreach ($settings as $result) {
            if( $result['key'] == 'opening_time_bussness' 
                || $result['key'] == 'opening_time_delivery' 
                || $result['key'] == 'opening_time_collection' 
                || $result['key'] == 'opening_time' 
                || $result['key'] == 'delivery_gaptime' 
                || $result['key'] == 'collection_gaptime' 
                || $result['key'] == 'closing_dates' 
                || $result['key'] == 'business_closing_dates' 
                || $result['key'] == 'order_outof_bussiness_time' 
                || $result['key'] == 'delivery_same_bussiness' 
                || $result['key'] == 'delivery_same_bussiness' 
                || $result['key'] == 'collection_same_bussiness' 
            ){
                if (!$result['serialized']) {
                    $data[$result['key']] = $result['value'];
                } else {
                    $data[$result['key']] = unserialize($result['value']);
                }
            }
        }

        $days = [];
        $times = [];
        $str_arr = preg_split ("/\ /", $data['opening_time']);
        foreach($str_arr as $key=>$result){
            $split = preg_split ("/\,/", $result);
            $days[$key] = $split[0];
            $times[$key] = $split[1];
        }

        $split = preg_split ("/\-/", $times[0]);

        $open = $split[0];
        $close = $split[1];
        
        return Inertia::render('Admin/Settings/OpenClose',[
            'data' => $data,
            'days' => $days,
            'times' => $times['0'],
            'open' => $open,
            'close' => $close
        ]);
    }

    public function update(Request $request){
        dd($request->toArray());
    }
}
