<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Redirect;
use Carbon\Carbon;

use App\Models\oc_category_to_store;
use App\Models\oc_product_icons;
use App\Models\oc_product_topping_option;
use App\Models\oc_topping;
use App\Models\oc_product_topping_type;
use App\Models\oc_store;
use App\Models\oc_topping_cat_option;
use App\Models\oc_topping_option;
use App\Models\oc_product_description;
use App\Models\oc_product_to_store;
use App\Models\oc_product;
use App\Models\oc_product_to_category;

class ProductController extends Controller
{
    public function index(Request $request){

        $store_id =  $request->session()->get('store_id');
        $category=oc_category_to_store::with('getCategoryDescriptionWithProducts')->join('oc_category', 'oc_category.category_id', '=', 'oc_category_to_store.category_id')->where('oc_category_to_store.store_id','=',$store_id)->orderBy('oc_category.sort_order','asc')->get();
       
        // dd($category);
        return Inertia::render('Admin/Catalog/Product/Product',[
                'categories' => $category,
            ]);
    
    }

    public function create(Request $request){
        $store_id =  $request->session()->get('store_id');


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
        $store_id =  $request->session()->get('store_id');

        $store = oc_store::where('store_id', $store_id)->first();

        $product = $request['product'];

        $product_des = $request['product_description'];

        $toppings = $request['cat_group_topping'];

        $categoryId = $request['product']['category_id'];


        $category=oc_category_to_store::join('oc_category', 'oc_category.category_id', '=', 'oc_category_to_store.category_id')
        ->join('oc_topping_cat_option', 'oc_topping_cat_option.id_category', '=', 'oc_category_to_store.category_id')
        ->where('oc_category_to_store.store_id','=',$store_id)
        ->where('oc_category.category_id', $product)
        ->first();

        $groups = unserialize($category['group']);
        
        $toppingIds = [];
        
        if($groups){
            foreach($groups as $key=>$group){
                $toppingIds[$key] = $group['id_group_option'];
            }
        }

        // dd($toppingIds);

        $toppingString = implode(',', $toppingIds);

        $description = new oc_product_description;

        $description->fill([
            'language_id'       => 1,
            'name'              => $product_des['name'],
            'description'       => $product_des['description'],
            'meta_description'  => '',
            'meta_keyword'      => '',
            'tag'               => ''
        ]);

        $description->save();

        $product_to_store = new oc_product_to_store;

        $product_to_store->fill([
            'product_id'        => $description->product_id,
            'store_id'          => $request->session()->get('store_id'),
        ]);

        $product_to_store->save();


        $product_to_cat = new oc_product_to_category;

        $product_to_cat->fill([
            'product_id'        => $description->product_id,
            'category_id'       => $categoryId,
        ]);

        $product_to_cat->save();


        $storeTopping = new oc_product_topping_option;

        $storeTopping->fill([
            'product_id'        => $description->product_id,
            'store_id'          => $request->session()->get('store_id'),
            'topping_ids'       => $toppingString,
            'enable_option'     => $category['enable_option'],
            'enable_boxcomment' => $category['enable_boxcomment'],
            'options_group'     => $category['group'],
        ]);

        $storeTopping->save();


        
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

        $image_path = '';
        if( array_key_exists('image',  $product)){
       
            $image = $product['image'];
            $image_name = wordwrap(strtolower($image->getClientOriginalName()), 1, '_', 0) ;
            $image->move(public_path('/image/data/shop-files/'.$store_path),$image_name);
            $image_path = "/image/data/shop-files/".$store_path . $image_name;
        }

        $product_insert = new oc_product;

        $product_insert->fill([

            'product_id'        => $description->product_id,
            'model'             => 'unknown',
            'sku'               => ' ',
            'upc'               => ' ',
            'ean'               => ' ',
            'jan'               => ' ',
            'isbn'              => ' ',
            'mpn'               => ' ',
            'location'          => ' ',
            'quantity'          => 999,
            'stock_status_id'   => 0,
            'image'             => $image_path,
            'manufacturer_id'   => 0,
            'shipping'          => 1,
            'order_type'        => $product_des['order_type'],
            'price'             => $product_des['price'],
            'collection_price'  => $product_des['collection_price'],
            'delivery_price'    => $product_des['delivery_price'],
            'tax_class_id'      => 0,
            'date_available'    => '',
            'date_added'        => Carbon::now(),
            'date_modified'     => Carbon::now(),
            'availibleday'      => implode(',', $product_des['availibleday']),
            'product_icons'     => $product_des['product_icons']
        ]);

        $product_insert->save();

        return redirect()->route('admin.catalog.product.index');




    }

    public function edit($id, Request $request){
        $store_id =  $request->session()->get('store_id');
        
        $categories=oc_category_to_store::with('getCategoryDescriptionWithProducts')
        ->join('oc_category', 'oc_category.category_id', '=', 'oc_category_to_store.category_id')
        ->where('oc_category_to_store.store_id','=',$store_id)
        ->orderBy('oc_category.sort_order','asc')
        ->get();

        // dd($categories,$id);
        $productData=[];

        foreach($categories as $category ){

              $products =  $category['getCategoryDescriptionWithProducts'];

            //   dd($products);

              foreach($products['getCategoryProduct'] as $product){
                
                if($product['product_id'] == $id){
                    $productData = $product;
                }

              }
            
        }

        // dd($productData);

        $productData['getProductDescription']['availibleday'] = preg_split ("/\,/", trim($productData['getProductDescription']['availibleday'],''));
        
        $toppings = oc_product_topping_option::where('product_id', $productData['product_id'])->first();
      
        $toppingData = [];
        $group_topping = [];

        if($toppings){
            
            if($toppings['options_group']){
                $toppings['options_group'] = unserialize($toppings['options_group']);
            }

            $toppings['topping_ids'] = preg_split ("/\,/", trim($toppings['topping_ids'],''));
            
            foreach($toppings['topping_ids'] as $key=>$topping){
                $toppingData[$key] = oc_topping::where('id_topping', $topping)->first();
            
            }
            foreach( $toppings['options_group'] as $key=>$group ){

                $group_topping[$key] = oc_product_topping_type::where('id_group_topping', $group)
                                                        ->where('id_product', $toppings['product_id'])
                                                        ->first();
            }
    
            foreach($group_topping as $gtopping){
                if($gtopping){
                    $gtopping['choose'] = unserialize($gtopping['choose']);
                }
                
            }
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
