<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Redirect;
use Carbon\Carbon;
use DB;

use App\Models\oc_category_to_store;
use App\Models\oc_category;
use App\Models\oc_category_description;
use App\Models\oc_topping_cat_option;
use App\Models\oc_topping;
use App\Models\oc_topping_size;

class CategoryController extends Controller
{
    public function index(){

        $store_id = 77;

        $category=oc_category_to_store::with('getCategoryDescriptionWithProducts')->join('oc_category', 'oc_category.category_id', '=', 'oc_category_to_store.category_id')->where('oc_category_to_store.store_id','=',$store_id)->orderBy('oc_category.sort_order','asc')->paginate(20);
    
        // dd($category);

        return Inertia::render('Admin/Catalog/Category/Category',[
            'categories' => $category
            ]);
    
    }

    public function create(){

        return Inertia::render('Admin/Catalog/Category/CreateCategory',[
            
            ]);
    }

    public function store(Request $request){
        
        $store_id = 77;

        $banner_path = '';

        if($request->hasfile('banner')){
            $image_name = wordwrap(strtolower($request['banner']->getClientOriginalName()), 1, '_', 0);
            $request['banner']->move(public_path('/image/data/banners/'),$image_name);
            $banner_path = "/image/data/banners/". $image_name;

        }

        $image_path = '';

        if($request->hasfile('image')){
            $image_name = wordwrap(strtolower($request['image']->getClientOriginalName()), 1, '_', 0);
            $request['image']->move(public_path('/image/data/'),$image_name);
            $image_path = "/image/data/". $image_name;
        }


        $category = new oc_category;

        $category->fill([
            'image'         => $image_path,
            'img_banner'    => $banner_path,
            'top'           => 1,
            'column'        => 1,
            'sort_order'    => $request['sort'],
            'status'        => 0,
            'date_added'    => Carbon::now(),
            'date_modified' => Carbon::now(),
            'availibleday'  => implode(',', $request['availibleday']),
        ]);

        $category->save();

        

        $category_description = new oc_category_description;

        $category_description->fill([
            'category_id'       => $category->category_id,
            'language_id'       => 1,
            'name'              => $request['name'],
            'slug'              => wordwrap(strtolower($request['name']), 1, '_', 0),
            'description'       => $request['desc'],
            'meta_description'  => ' ',
            'meta_keyword'      => ' ',
        ]);

        $category_description->save();

        $toppings = new oc_topping_cat_option;

        $toppings->fill([
            'id_category'       => $category->category_id,
            'enable_size'       => 0,
            'enable_option'     => 0,
            'enable_boxcomment' => 0,
            'character'         => 0,
            'group'             => serialize('')
        ]);

        $toppings->save();

        
        $category_to_store = new oc_category_to_store;

        $category_to_store->fill([
            'category_id' => $category->category_id,
            'store_id'    => $store_id,
        ]);

        $category_to_store->save();

        return redirect()->route('admin.catalog.category.index');

    }

    public function edit($id){
        $store_id = 77;

        $category=oc_category_to_store::with('getCategoryDescriptionWithProducts')
        ->join('oc_category', 'oc_category.category_id', '=', 'oc_category_to_store.category_id')
        ->where('oc_category_to_store.category_id','=',$id)
        ->first();

        $category['availibleday'] = preg_split ("/\,/", trim($category['availibleday'],''));

        $options = oc_topping_cat_option::with('get_options')->where('id_category', $id)->first();



        foreach($options['get_options'] as $key=>$group){
            $group['size'] = html_entity_decode($group['size']);
        }

        
        $topping_store = oc_topping::where('store_topping', $store_id)->get();
        $toppings= [];

        if($options['group']){
            $options['group'] = unserialize($options['group']);


            // dd($options['group']);
            if($options['group']){
                foreach( $options['group'] as $key=>$group ){
                    $toppings[$key] = oc_topping::where('id_topping', $group['id_group_option'])->first();             
                }
            }
        }

        $groups = $options['group'];


        foreach($topping_store as $topping){
            $topping['name_topping'] = html_entity_decode($topping['name_topping']);
        }

        
        
        // dd($options,$toppings);

        return Inertia::render('Admin/Catalog/Category/EditCategory',[
            'category'      => $category,
            'options'       => $options,
            'toppings'      => $toppings,
            'topping_store' => $topping_store,
            'groups'        => $groups,
            ]);
    }

    public function update(Request $request){
        $category = $request['category'];
        $options = $request['options'];
        $image = $request['image'];
        $stay = $request['stay_on'];
        $category['availibleday'] = implode(',', $category['availibleday']);

        $category_description = $category['get_category_description_with_products'];

        $options['group'] = serialize($options['group']);

       
        if($image['image']){

            $image_name = wordwrap(strtolower($image['image']->getClientOriginalName()), 1, '_', 0);
            $image['image']->move(public_path('/image/data/'),$image_name);
            $category['image'] = "/image/data/". $image_name;
        }else{
            $category['image'] = ' ';
        }

        if($image['img_banner']){
            $image_name = wordwrap(strtolower($image['img_banner']->getClientOriginalName()), 1, '_', 0);
            $image['img_banner']->move(public_path('/image/data/'),$image_name);
            $category['img_banner'] = "/image/data/". $image_name;
            
        }else{
            $category['img_banner'] = ' ';
        }


        

        $cat_update = oc_category::find($category['category_id']);

        
        $cat_update->image           = $category['image'];
        $cat_update->img_banner      = $category ['img_banner'];
        $cat_update->sort_order      = $category['sort_order'];
        $cat_update->status          = $category['status'];
        $cat_update->date_modified   = Carbon::now();     ;
        $cat_update->availibleday    = $category['availibleday'] ;      
        
        $cat_update->save();


        $cat_des = oc_category_description::find($category['category_id']);
        
        $cat_des->name          = $category_description['name'];
        $cat_des->description   = $category_description['description'];

        $cat_des->save();


        $cat_options = oc_topping_cat_option::find($category['category_id']);

        
       $cat_options->enable_size       = $options['enable_size'];
       $cat_options->enable_option     = $options['enable_option'];
       $cat_options->enable_boxcomment = $options['enable_boxcomment'];
       $cat_options->character         = $options['character'];
       $cat_options->group             = $options['group'];
    
       $cat_options->save();

       if( $stay == 1){
            return redirect()->back();
       }else{
            return redirect()->route('admin.catalog.category.index');
       }

       
    }
    public function sizeStore(Request $request){
        $cat_id = $request['id'];
        $size = $request['size'];
        
        $last = oc_topping_size::orderBy('id_size', 'desc')->first()->id_size;
        

        $topping = new oc_topping_size;
        $topping->fill([
            'id_size'       => $last + 1,
            'id_category'   => $cat_id,
            'size'          => $size['size'],
            'short_order'   => $size['sort']
        ]);
        
        $topping->save();

        return redirect()->back();
    }
    public function sizeUpdate(Request $request){
       
        $topping = oc_topping_size::where('id_size', $request['id_size'])->update($request->all());

        return redirect()->back();
    }
    public function sizeDelete($id){
        $topping = oc_topping_size::where('id_size', $id)->delete();

        return redirect()->back();
    }

    public function delete(Request $request){
        oc_category_to_store::whereIn('category_id', $request)->delete();
        return redirect()->back();
    }
    public function optionDelete(Request $request){
        
        $groups = $request['groups'];
        $id = $request['id'];
        $index = $request['index'];
        unset($groups[$index]);

        $options = oc_topping_cat_option::find($id);

        $options->group = serialize($groups);
        $options->save();

        return redirect()->back();

    }

    public function optionStore(Request $request){
        
       
        $groups = $request['group'];
        $id = $request['id'];
        $option = $request['option'];

        $option['id_group_option'] = (string) $option['id_group_option'];
        $option['set_option'] = (string) $option['set_option'];
        $option['set_require'] = (string) $option['set_require'];

        $groupData = [];

        if($groups != null){
            $groupData = $groups;
            array_push($groups, $option);
        }else{
            array_push($groupData, $option);
        }
        
        
        // dd($groupData);
        

        // 
    
        $options = oc_topping_cat_option::find($id);

        $options->group = serialize($groupData);
        $options->save();

        return redirect()->back();

    }


}
