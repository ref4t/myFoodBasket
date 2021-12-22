<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Redirect;

use App\Models\oc_category_to_store;
use App\Models\oc_product_icons;
use App\Models\oc_product_topping_option;
use App\Models\oc_topping;
use App\Models\oc_product_topping_type;

class ProductController extends Controller
{
    public function index(){

        $store_id = 77;
        $category=oc_category_to_store::with('getCategoryDescriptionWithProducts')->join('oc_category', 'oc_category.category_id', '=', 'oc_category_to_store.category_id')->where('oc_category_to_store.store_id','=',$store_id)->orderBy('oc_category.sort_order','asc')->get();
       
        // dd($category);
        return Inertia::render('Admin/Catalog/Product/Product',[
                'categories' => $category,
            ]);
    
    }

    public function edit($id){
        $store_id = 77;
        
        $categories=oc_category_to_store::with('getCategoryDescriptionWithProducts')
        ->join('oc_category', 'oc_category.category_id', '=', 'oc_category_to_store.category_id')
        ->where('oc_category_to_store.store_id','=',$store_id)
        ->orderBy('oc_category.sort_order','asc')
        ->get();

        // dd($categories,$id);
        $productData=[];

        foreach($categories as $category ){

              $products =  $category['getCategoryDescriptionWithProducts'];

              foreach($products['getCategoryProduct'] as $product){
                
                if($product['product_id'] == $id){
                    $productData = $product;
                }

              }
            
        }

        $productData['getProductDescription']['availibleday'] = preg_split ("/\,/", trim($productData['getProductDescription']['availibleday'],''));
        
        $toppings = oc_product_topping_option::where('product_id', $productData['product_id'])->first();
      
        if($toppings['options_group']){
            $toppings['options_group'] = unserialize($toppings['options_group']);
        }
        
        $toppings['topping_ids'] = preg_split ("/\,/", trim($toppings['topping_ids'],''));

        $toppingData = [];
        foreach($toppings['topping_ids'] as $key=>$topping){
            $toppingData[$key] = oc_topping::where('id_topping', $topping)->first();
           
        }


        $group_topping = [];


        foreach( $toppings['options_group'] as $key=>$group ){

            $group_topping[$key] = oc_product_topping_type::where('id_group_topping', $group)
                                                    ->where('id_product', $toppings['product_id'])
                                                    ->first();
        }

        foreach($group_topping as $gtopping){
            $gtopping['choose'] = unserialize($gtopping['choose']);
        }

        // dd($group_topping);
        // dd($productData['getProductDescription']['availibleday']);
        $product_icons = oc_product_icons::all();

        return Inertia::render('Admin/Catalog/Product/EditProduct',[
            'categories'    => $categories,
            'product'       => $productData,
            'icons'         => $product_icons,
            'toppings'      => $toppings,
            'toppingData'   => $toppingData,
            'group_topping' => $group_topping,
        ]);
    }
}
