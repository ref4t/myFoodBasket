<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Carbon\Carbon;

use App\Models\oc_setting;

class PaymentController extends Controller
{
    public function index(Request $request){

        $store_id =$request->session()->get('store_id');
        $data = [];
        $settings=oc_setting::where('store_id','=',$store_id)->where('group','=','admin_status')->get();
        

        foreach ($settings as $result) {
            
            
            if (!$result['serialized']) {
                $data[$result['key']] = $result['value'];
            } else {
                $data[$result['key']] = unserialize($result['value']);
            }
            
            
        }

        return Inertia::render('Admin/Settings/Payment/Payment',[
            'data'  => $data
        ]);
    }

    public function update(Request $request){
        $data = $request->all();

        $store_id =$request->session()->get('store_id');

        foreach ($data as $key => $value) {

            $option = oc_setting::where('store_id',$store_id)->where('key', $key)->update(['value' => $value]);
            
        }

        return redirect()->back();

    }

    public function myfb(Request $request){


        $store_id =$request->session()->get('store_id');
        $data = [];
        $settings=oc_setting::where('store_id','=',$store_id)->where('group','=','myfoodbasketpayments_gateway')->get();
        

        foreach ($settings as $result) {
            
            
            if (!$result['serialized']) {
                $data[$result['key']] = $result['value'];
            } else {
                $data[$result['key']] = unserialize($result['value']);
            }
            
            
        }

        return Inertia::render('Admin/Settings/Payment/MyFB',[
            'data'      => $data
        ]);
    }

    public function myfbUpdate(Request $request){
        $data = $request['data'];
        $store_id =$request->session()->get('store_id');

        foreach ($data as $key => $value) {

            $option = oc_setting::where('store_id',$store_id)->where('key', $key)->update(['value' => $value]);
            
        }

        return redirect()->back();
    }
}
