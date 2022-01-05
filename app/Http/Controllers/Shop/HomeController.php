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
use App\Models\oc_customer;
use Gloudemans\Shoppingcart\Facades\Cart;

use App\Models\layout;



class HomeController extends Controller
{
    public function index(Request $request)
    {
        //  dd(request()->root());

        // $url = 'https://www.stationkebabs.co.uk/';
        $url = request()->root();
        $store_id =  $request->session()->get('store_id');
        if(!$store_id){
            $url = 'https://www.pizzacolichfield.co.uk/';
            $url =parse_url($url)['host'];
            $site = oc_store::where('url','like', '%'.$url.'%')->first();
        }
        else{
            $site = oc_store::where('store_id',$store_id)->first();
        }
        if(!$site){
            return abort(404);
        }
         $delivery = oc_delivery_settings::select('name','min_spend')->where('id_store','=',$site->store_id)->get(); 
        $timeSetting=oc_setting::showtimeconfig($site->store_id); 
        // dd($timeSetting);
        $settings=oc_setting::where('store_id','=',$site->store_id)->where('group','=','config')->orWhere('group','=','deliverysetting')->get();
        $data['store_id']=$site->store_id;
                foreach ($settings as $result) {
                    if($result['key'] == 'config_logo' || $result['key'] == 'config_name' || $result['key'] == 'config_address' || $result['key'] == 'config_telephone' || $result['key'] == 'config_email' || $result['key'] == 'config_ssl' || $result['key'] == 'opening_time' ){
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

        $reviews = oc_store_review::with('getCustomer')->where('store_id', $store_id)->get();
        $layout = layout::with('get_slider','get_gallery','get_popular','get_category')->where('store_id', $store_id)->first();


        $theme = $layout['theme'];


        if ($theme == 1){
            return Inertia::render('ShopPages/Theme_1/Home',[
                'theme'         => $theme,
                'timeSetting'   =>$timeSetting,
                'setting'       =>$data,
                'cartItems'     =>$cart,
                'cTotal'        =>$total,
                'cSubtotal'     =>$subtotal,
                'layout'        =>$layout,
                'reviews'       =>$reviews
            ]);
        }elseif($theme == 6){
            return Inertia::render('ShopPages/Theme_6/Home',[
                'theme'         => $theme,
                'timeSetting'   =>$timeSetting,
                'setting'       =>$data,
                'cartItems'     =>$cart,
                'cTotal'        =>$total,
                'cSubtotal'     =>$subtotal,
                'layout'        =>$layout,
                'reviews'       =>$reviews
            ]);
        }elseif($theme == 5){
            return Inertia::render('ShopPages/Theme_5/Home',[
                'theme'         => $theme,
                'timeSetting'   =>$timeSetting,
                'setting'       =>$data,
                'cartItems'     =>$cart,
                'cTotal'        =>$total,
                'cSubtotal'     =>$subtotal,
                'layout'        =>$layout,
                'reviews'       =>$reviews
            ]);
        }elseif($theme == 4){
            return Inertia::render('ShopPages/Theme_4/Home',[
                'theme'         => $theme,
                'timeSetting'   =>$timeSetting,
                'setting'       =>$data,
                'cartItems'     =>$cart,
                'cTotal'        =>$total,
                'cSubtotal'     =>$subtotal,
                'layout'        =>$layout,
                'reviews'       =>$reviews
            ]);
        
        }elseif($theme == 3){
            return Inertia::render('ShopPages/Theme_3/Home',[
                'theme'         => $theme,
                'timeSetting'   =>$timeSetting,
                'setting'       =>$data,
                'cartItems'     =>$cart,
                'cTotal'        =>$total,
                'cSubtotal'     =>$subtotal,
                'layout'        =>$layout,
                'reviews'       =>$reviews
            ]);
        }
        elseif($theme == 2){
            return Inertia::render('ShopPages/Theme_2/Home',[
                'theme'         => $theme,
                'timeSetting'   =>$timeSetting,
                'setting'       =>$data,
                'cartItems'     =>$cart,
                'cTotal'        =>$total,
                'cSubtotal'     =>$subtotal,
                'layout'        =>$layout,
                'reviews'       =>$reviews
            ]);
        }
    }
}
