<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\oc_setting;
use App\Models\oc_store;

class AboutusController extends Controller
{
    public function index() {
        $url = request()->root();
        $url = 'https://www.pizzacolichfield.co.uk/';
        $url =parse_url($url)['host'];
        $site = oc_store::where('url','like', '%'.$url.'%')->first();
        if(!$site){
            return abort(404);
        }
        $timeSetting=oc_setting::showtimeconfig($site->store_id); 
        $settings=oc_setting::where('store_id','=',$site->store_id)->where('group','=','config')->orWhere('group','=','deliverysetting')->get();
        $data['store_id']=$site->store_id;
                foreach ($settings as $result) {
                    if($result['key'] == 'config_logo' || $result['key'] == 'config_name' || $result['key'] == 'config_address' || $result['key'] == 'config_telephone' || $result['key'] == 'config_ssl' || $result['key'] == 'opening_time' || $result['key'] == 'map_ifram' || $result['key'] == 'map_post_code'){
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
        $theme = 2;
       
            return Inertia::render('ShopPages/Theme_6/Contact',['theme' => $theme, 'timeSetting'=>$timeSetting, 'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
    }
}
