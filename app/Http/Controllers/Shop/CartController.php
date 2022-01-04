<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\oc_product;
use App\Models\oc_store;
use App\Models\oc_setting;
use App\Models\oc_product_description;
use App\Models\layout;

use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index(Request $request)
    {   
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
    //    $delivery = oc_delivery_settings::select('name','min_spend')->where('id_store','=',$site->store_id)->get(); 
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

      $layout = layout::with('get_slider','get_gallery','get_popular','get_category')->where('store_id', $site->store_id)->first();

      $theme = $layout['theme'];

      if($theme == 1){
        return Inertia::render('ShopPages/Theme_1/Cart',['theme' => $theme,'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
      }
      elseif($theme == 3){
        return Inertia::render('ShopPages/Theme_3/Cart',['theme' => $theme,'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
      }
      elseif($theme == 2){
        return Inertia::render('ShopPages/Theme_2/Cart',['theme' => $theme,'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
      }
      elseif($theme == 4){
        return Inertia::render('ShopPages/Theme_4/Cart',['theme' => $theme,'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
      }
      elseif($theme == 5){
        return Inertia::render('ShopPages/Theme_5/Cart',['theme' => $theme,'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
      }
      else{
        return Inertia::render('ShopPages/Theme_6/Cart',['theme' => $theme,'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
      }
              
    
          
  
    }
    public function addToCart(Request $request){
        $product_id=$request->input('id_product');
        $size_id=$request->input('id_size');
        $rowId = rand(); // generate a unique() row ID
        // dd($request->input('id_product'));
        if($size_id != 0){
            $product = oc_product_description::with(['sizeInfo'=>function ($query) use ($size_id) {
                return $query->where('oc_topping_product_price_size.id_size', '=', $size_id);
            }])->where('oc_product_description.product_id',$product_id)->leftJoin('oc_product', 'oc_product.product_id', '=', 'oc_product_description.product_id')->first();
            $cart=Cart::add($product->product_id,$product->name,1,$product->sizeInfo[0]->price,$product->weight,['size'=>$product->sizeInfo[0]->size]);
        }
        else{
            $product = oc_product_description::where('oc_product_description.product_id',$product_id)->leftJoin('oc_product', 'oc_product.product_id', '=', 'oc_product_description.product_id')->first();
        //  dd($product_id);

            $cart=Cart::add($product->product_id,$product->name,1,$product->price,$product->weight);
        }
        
        $contents=Cart::content();
        $total=Cart::total();
        $subtotal =Cart::subtotal();
        return response()->json(['contents'=>$contents,'total'=>$total,'subtotal'=>$subtotal]);
    }
    public function removeFromCart(Request $request){
        $product_id=$request->input('id_product');
        $rowId=$request->input('rowId');
        Cart::remove($rowId);
        $contents=Cart::content();
        $total=Cart::total();
        $subtotal =Cart::subtotal();
        return response()->json(['contents'=>$contents,'total'=>$total,'subtotal'=>$subtotal]);
    }
}
