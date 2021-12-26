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
use Gloudemans\Shoppingcart\Facades\Cart;

class MenuController extends Controller
{
    public function index()
    {
        $url = request()->root();
        $url = 'https://www.pizzaria.co.uk/';
        $url =parse_url($url)['host'];
        $site = oc_store::where('url','like', '%'.$url.'%')->first();
         $delivery = oc_delivery_settings::select('name','min_spend')->where('id_store','=',$site->store_id)->get(); 
        $timeSetting=oc_setting::showtimeconfig($site->store_id); 
        // dd($timeSetting);
        // Cart::destroy();
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
        $category=oc_category_to_store::with('getCategoryDescriptionWithProducts')->join('oc_category', 'oc_category.category_id', '=', 'oc_category_to_store.category_id')->where('oc_category_to_store.store_id','=',$site->store_id)->orderBy('oc_category.sort_order','asc')->get();
        $theme = 2;
        // dd($category[0]->getCategoryDescriptionWithProducts);
        $cart=Cart::content();
        $total=Cart::total();
        $subtotal =Cart::subtotal();
        return Inertia::render('ShopPages/Theme_6/Menu',['theme' => $theme,'setting'=>$data,'category'=>$category,'timeSetting'=>$timeSetting,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
    }
}
