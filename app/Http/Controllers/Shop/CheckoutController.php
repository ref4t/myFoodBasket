<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\oc_setting;
use App\Models\oc_store;


class CheckoutController extends Controller
{
    public function index()
    {   
        $url = request()->root();
        $site = oc_store::where('url','like', '%'.$url.'%')->first();
        if(!$site){
            return abort(404);
        }
        $timeSetting=oc_setting::showtimeconfig($site->store_id); 
        $settings=oc_setting::where('store_id','=',$site->store_id)->where('group','=','config')->orWhere('group','=','deliverysetting')->get();
        $data['store_id']=$site->store_id;
                foreach ($settings as $result) {
                    if($result['key'] == 'config_logo' || $result['key'] == 'config_name' || $result['key'] == 'config_address' || $result['key'] == 'config_telephone' || $result['key'] == 'config_ssl' || $result['key'] == 'opening_time'){
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
        if($subtotal == 0){
         return Inertia::render('ShopPages/Theme_6/Cart',['theme' => $theme, 'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
        }
        else
         return Inertia::render('ShopPages/Theme_6/Checkout',['theme' => $theme, 'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
    }
}
