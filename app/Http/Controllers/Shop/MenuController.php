<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\oc_store;
use App\Models\oc_delivery_settings;
use App\Models\oc_setting;
use App\Models\oc_category_to_store;
use App\Models\oc_product_to_store;
use App\Models\oc_product;
use App\Models\oc_topping_product_price_size;
use App\Models\oc_product_description;
use App\Models\oc_topping_size;
use App\Models\layout;
use Gloudemans\Shoppingcart\Facades\Cart;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        // $url = request()->root();
        // $url = 'www.stationkebabs.co.uk/';

        $store_id = $request->session()->get('store_id');
        $url = 'www.ak-spices.co.uk/';


        $site = oc_store::where('url','like', '%'.$url.'%')->first();
         $delivery = oc_delivery_settings::select('name','min_spend')->where('id_store','=',$site->store_id)->get(); 
        $timeSetting=oc_setting::showtimeconfig($site->store_id); 
        // dd($timeSetting);
        // Cart::destroy();
        $settings=oc_setting::where('store_id','=',$site->store_id)->where('group','=','config')->orWhere('group','=','deliverysetting')->get();
        $data['store_id']=$site->store_id;
                foreach ($settings as $result) {
                    if($result['key'] == 'config_logo' || $result['key'] == 'config_name' || $result['key'] == 'config_address' || $result['key'] == 'config_email' || $result['key'] == 'config_telephone' || $result['key'] == 'config_ssl' || $result['key'] == 'opening_time'){
                        if (!$result['serialized']) {
                            $data[$result['key']] = $result['value'];
                        } else {
                            $data[$result['key']] = unserialize($result['value']);
                        }
                    }
                }
        $category=oc_category_to_store::with('getCategoryDescriptionWithProducts')->join('oc_category', 'oc_category.category_id', '=', 'oc_category_to_store.category_id')->where('oc_category_to_store.store_id','=',$site->store_id)->orderBy('oc_category.sort_order','asc')->get();
        $theme = 2;
        // dd($category[0]->getCategoryDescriptionWithProducts);
        $cart=Cart::content();
        $total=Cart::total();
        $subtotal =Cart::subtotal();

        $layout = layout::with('get_slider','get_gallery','get_popular','get_category')->where('store_id', $store_id)->first();

        $theme = $layout['theme'];

        if($theme == 5){
            return Inertia::render('ShopPages/Theme_5/Menu',['theme' => $theme,'setting'=>$data,'category'=>$category,'timeSetting'=>$timeSetting,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
        }
        elseif($theme == 4){
            return Inertia::render('ShopPages/Theme_4/Menu',['theme' => $theme,'setting'=>$data,'category'=>$category,'timeSetting'=>$timeSetting,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
        }
        elseif($theme == 3){
            return Inertia::render('ShopPages/Theme_3/Menu',['theme' => $theme,'setting'=>$data,'category'=>$category,'timeSetting'=>$timeSetting,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
        }
        elseif($theme == 2){
            return Inertia::render('ShopPages/Theme_2/Menu',['theme' => $theme,'setting'=>$data,'category'=>$category,'timeSetting'=>$timeSetting,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
        }
        elseif($theme == 1){
            return Inertia::render('ShopPages/Theme_1/Menu',['theme' => $theme,'setting'=>$data,'category'=>$category,'timeSetting'=>$timeSetting,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
        }
        else{
            return Inertia::render('ShopPages/Theme_6/Menu',['theme' => $theme,'setting'=>$data,'category'=>$category,'timeSetting'=>$timeSetting,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
        }
        
        
    }
}
