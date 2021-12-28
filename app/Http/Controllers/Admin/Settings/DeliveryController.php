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
                || $result['key'] == 'is_distance_option'
                || $result['key'] == 'road_mileage_percentage'
                || $result['key'] == 'google_distance_api_key'
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
            $delivery_settings[$key]->area =  preg_split ("/\,/", trim($delivery->area,''));
        
        }

        

        
        return Inertia::render('Admin/Settings/Delivery',[
            'delivery' => $delivery_settings,
            'settings' => $data,
        ]);
    }


    public function delete(Request $request){

        $data = $request->toArray();

        
        $data = $data['data'];

        $id = $data['id_delivery_settings'];

        $group = oc_delivery_settings::where('id_delivery_settings', $id)->delete();

        return redirect()->back();

    }


    public function addPostGroup( Request $request){
        $data = $request->toArray();

        $data = $data['data'];

        // dd($data);

        // implode(',', $product_des['availibleday']),
        // $store_id = $request->session()->get('store_id');

        $post_codes = implode(',', $data['post_codes']);

        

        $delivery = new oc_delivery_settings;

        $delivery->fill([
            'id_store'          => $request->session()->get('store_id'),
            'delivery_type'     => 'post_code',
            'name'              => $data['name'],
            'min_spend'         => $data['min_spend'],
            'post_codes'       => $post_codes,
            'distance'          => 0,
            'area'              => ' ',
        ]);

        $delivery->save();

        return redirect()->back();

    }


    public function addDistGroup( Request $request){
        $data = $request->toArray();

        $data = $data['data'];

        // dd($data);

        // implode(',', $product_des['availibleday']),
        // $store_id = $request->session()->get('store_id');

        // $post_codes = implode(',', $data['post_codes']);

        

        $delivery = new oc_delivery_settings;

        $delivery->fill([
            'id_store'          => $request->session()->get('store_id'),
            'delivery_type'     => 'distance',
            'name'              => $data['name'],
            'min_spend'         => $data['min_spend'],
            'post_codes'       => ' ',
            'distance'          => $data['distance'],
            'area'              => ' ',
        ]);

        $delivery->save();

        return redirect()->back();

    }


    public function addAreaGroup( Request $request){
        $data = $request->toArray();

        $data = $data['data'];

        // dd($data);

        // implode(',', $product_des['availibleday']),
        // $store_id = $request->session()->get('store_id');

        $area = implode(',', $data['areas']);

        

        $delivery = new oc_delivery_settings;

        $delivery->fill([
            'id_store'          => $request->session()->get('store_id'),
            'delivery_type'     => 'distance',
            'name'              => $data['name'],
            'min_spend'         => $data['min_spend'],
            'post_codes'       => ' ',
            'distance'          => 0,
            'area'              => $area,
        ]);

        $delivery->save();

        return redirect()->back();

    }

    public function update(Request $request){

        $data = $request['settings'];
        $groups = $request['delivery'];

        // dd($groups);
        // dd($data);

        foreach ($data as $key => $value) {

            $option = oc_setting::where('store_id', $request->session()->get('store_id'))
            ->where('key', $key )->update(['value' => $value]);
        }

        // $upda = [];

        foreach($groups as $key=>$group){

            $update = oc_delivery_settings::find($group['id_delivery_settings']);

            $update->name           = $group['name'];
            $update->min_spend      = $group['min_spend'];
            $update->post_codes     = implode(',', $group['post_codes']) ;
            $update->distance       = $group['distance'];
            $update->area           = implode(',', $group['area']) ;

            $update->save();
            
        }

        return redirect()->back();
    }
}
