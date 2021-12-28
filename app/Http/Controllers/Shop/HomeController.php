<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\oc_store;
use App\Models\oc_store_review;
use App\Models\oc_slider;
use App\Models\oc_gender;
use App\Models\oc_ybc_openclosttime;
use App\Models\oc_delivery_settings;
use App\Models\oc_setting;
use Gloudemans\Shoppingcart\Facades\Cart;


class HomeController extends Controller
{
    public function index()
    {
        //  dd(request()->root());

        $url = 'www.stationkebabs.co.uk/';
        // $url = request()->root();
        $site = oc_store::where('url','like', '%'.$url.'%')->first();
        if(!$site){
            return abort(404);
        }
         $delivery = oc_delivery_settings::select('name','min_spend')->where('id_store','=',$site->store_id)->get(); 
        $timeSetting=oc_setting::showtimeconfig($site->store_id); 
        // dd($timeSetting);
        $settings=oc_setting::where('store_id','=',$site->store_id)->where('group','=','config')->orWhere('group','=','deliverysetting')->get();
        $data['store_id']=$site->store_id;
                foreach ($settings as $result) {
                    if($result['key'] == 'config_logo' || $result['key'] == 'config_name' || $result['key'] == 'config_address' || $result['key'] == 'config_telephone' || $result['key'] == 'config_ssl' || $result['key'] == 'opening_time' ){
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
        if ($theme == 1){
            return Inertia::render('ShopPages/Theme_1/Home',[
                'theme' => $theme, 
                'reviews' => $reviews,
                'slider' => $slider,
                'gender' => $gender,
                'url' => $url,
                'site' => $site,
                'delivery' => $delivery,
                'timeSetting' => $timeSetting,
                'setting' => $data
            ]);
        }else
            return Inertia::render('ShopPages/Theme_6/Home',['theme' => $theme,'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
    }
}
