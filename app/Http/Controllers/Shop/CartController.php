<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\oc_product;
use App\Models\oc_product_description;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {   
       dd(Cart::content());
        $theme = 2;
        if ($theme == 1){
            return Inertia::render('ShopPages/Theme_1/Cart',['theme' => $theme]);
        }else
            return Inertia::render('ShopPages/Theme_2/Cart',['theme' => $theme]);
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
        return response()->json($contents);
    }
}
