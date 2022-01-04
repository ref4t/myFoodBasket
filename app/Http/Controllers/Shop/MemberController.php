<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\oc_setting;
use App\Models\oc_store;
use App\Models\layout;


class MemberController extends Controller
{
    public function index(Request $request)
    {   
        $store_id = $request->session()->get('store_id');
        $url = 'www.stationkebabs.co.uk/';
        // $url = request()->root();
        $site = oc_store::where('url','like', '%'.$url.'%')->first();
        if(!$site){
            return abort(404);
        }
        $timeSetting=oc_setting::showtimeconfig($site->store_id); 
        $settings=oc_setting::where('store_id','=',$site->store_id)->where('group','=','config')->orWhere('group','=','deliverysetting')->get();
        $data['store_id']=$site->store_id;
                foreach ($settings as $result) {
                    if($result['key'] == 'config_logo' || $result['key'] == 'config_name' || $result['key'] == 'config_address'|| $result['key'] == 'config_email' || $result['key'] == 'config_telephone' || $result['key'] == 'config_ssl' || $result['key'] == 'opening_time'){
                        if (!$result['serialized']) {
                            $data[$result['key']] = $result['value'];
                        } else {
                            $data[$result['key']] = unserialize($result['value']);
                        }
                    }
                }
        $cart=Cart::content();
        $total=Cart::total();
        $subtotal =Cart::subtotal();
        // $theme = 2;

        $layout = layout::with('get_slider','get_gallery','get_popular','get_category')->where('store_id', $store_id)->first();

        $theme = $layout['theme'];

        if($theme == 5){
            return Inertia::render('ShopPages/Theme_5/Member',['theme' => $theme, 'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
        }
        elseif($theme == 4){
            return Inertia::render('ShopPages/Theme_4/Member',['theme' => $theme, 'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
        }
        elseif($theme == 3){
            return Inertia::render('ShopPages/Theme_3/Member',['theme' => $theme, 'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
        }
        elseif($theme == 2){
            return Inertia::render('ShopPages/Theme_2/Member',['theme' => $theme, 'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
        }
        elseif($theme == 1){
            return Inertia::render('ShopPages/Theme_1/Member',['theme' => $theme, 'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
        }
        else{
            return Inertia::render('ShopPages/Theme_6/Member',['theme' => $theme, 'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
        }
            
    }
}
