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
use App\Models\oc_store;
use App\Models\oc_topping_cat_option;
use App\Models\oc_topping_option;

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

    public function create(){
        $store_id = 77;


        $category=oc_category_to_store::with('getCategoryDescriptionWithProducts')->join('oc_category', 'oc_category.category_id', '=', 'oc_category_to_store.category_id')
        ->join('oc_topping_cat_option', 'oc_topping_cat_option.id_category', '=', 'oc_category_to_store.category_id')
        ->where('oc_category_to_store.store_id','=',$store_id)
        ->orderBy('oc_category.sort_order','asc')
        ->get();

        $toppingData = [];
        

        $cat_group_topping = oc_topping::with('get_options')->where('store_topping', $store_id)->get();

        

        $options = [];
        foreach($category as $key=>$cat){
            $cat['group'] = unserialize($cat['group']);

               
        }
        

        $product_icons = oc_product_icons::all();

        return Inertia::render('Admin/Catalog/Product/CreateProduct',[
            'categories' => $category,
            'icons' => $product_icons,
            // 'options' => $options,
            'cat_group_topping' => $cat_group_topping,
        ]);
    }

    public function store(Request $request){
        $store_id = 77;
        $store = oc_store::where('store_id', $store_id)->first();

        $product = $request['product_description'];
        
        // dd($product);
        $store_path = '';
        if (strcasecmp($store['name'][0],'a') == 0 || strcasecmp($store['name'][0],'b') == 0 ){
           $store_path = 'A-B';
        }elseif(strcasecmp($store['name'][0],'c') == 0 || strcasecmp($store['name'][0],'d') == 0 ){
            $store_path = 'C-D';
        }elseif(strcasecmp($store['name'][0],'e') == 0 || strcasecmp($store['name'][0],'f') == 0 ){
            $store_path = 'E-F';
        }elseif(strcasecmp($store['name'][0],'g') == 0 || strcasecmp($store['name'][0],'h') == 0 ){
            $store_path = 'G-H';
        }elseif(strcasecmp($store['name'][0],'i') == 0 || strcasecmp($store['name'][0],'j') == 0 ){
            $store_path = 'I-J';
        }elseif(strcasecmp($store['name'][0],'k') == 0 || strcasecmp($store['name'][0],'l') == 0 ){
            $store_path = 'K-L';
        }elseif(strcasecmp($store['name'][0],'m') == 0 || strcasecmp($store['name'][0],'n') == 0 ){
            $store_path = 'M-N';
        }elseif(strcasecmp($store['name'][0],'o') == 0 || strcasecmp($store['name'][0],'p') == 0 ){
            $store_path = 'O-P';
        }elseif(strcasecmp($store['name'][0],'q') == 0 || strcasecmp($store['name'][0],'r') == 0 ){
            $store_path = 'Q-R';
        }elseif(strcasecmp($store['name'][0],'s') == 0 || strcasecmp($store['name'][0],'t') == 0 ){
            $store_path = 'S-T';
        }elseif(strcasecmp($store['name'][0],'u') == 0 || strcasecmp($store['name'][0],'v') == 0 ){
            $store_path = 'U-V';
        }elseif(strcasecmp($store['name'][0],'w') == 0 || strcasecmp($store['name'][0],'x') == 0 ){
            $store_path = 'W-X';
        }elseif(strcasecmp($store['name'][0],'y') == 0 || strcasecmp($store['name'][0],'z') == 0 ){
            $store_path = 'Y-Z';
        }

        $store_name = wordwrap(strtolower($store['name']), 1, '-', 0);
        $store_path .= '/' ;
        $store_path  .= $store_name;
        // dd($store_path);
        // $store;

        // dd($request->all());
        $categoryId = $request['product']['category_id'];
       
        $product = $request['product_description'];

        if( array_key_exists('image',  $product)){
       
            $image = $product['image'];
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('/image/data/shop-files/'.$store_path),$image_name);
            $image_path = "/image/data/shop-files/".$store_path . $image_name;
        }




        

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
