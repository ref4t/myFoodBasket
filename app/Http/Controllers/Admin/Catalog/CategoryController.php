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

class CategoryController extends Controller
{
    public function index(){

        $store_id = 46;

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
        
        $store_id = 46;

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
            'category_id'       => $category->id,
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
            'id_category'       => $category->id,
            'enable_size'       => 0,
            'enable_option'     => 0,
            'enable_boxcomment' => 0,
            'enable_boxcomment' => 0,
            'character'         => 0,
            'group'             => serialize('')
        ]);

        $toppings->save();

        
        $category_to_store = new oc_category_to_store;

        $category_to_store->fill([
            'category_id' => $category->id,
            'store_id'    => $store_id,
        ]);

        $category_to_store->save();

        return redirect()->route('admin.catalog.category.index');

    }

    public function edit($id){
        $category=oc_category_to_store::with('getCategoryDescriptionWithProducts')
        ->join('oc_category', 'oc_category.category_id', '=', 'oc_category_to_store.category_id')
        ->where('oc_category_to_store.category_id','=',$id)
        ->first();

        $category['availibleday'] = preg_split ("/\,/", trim($category['availibleday'],''));

        $options = oc_topping_cat_option::with('get_options')->where('id_category', $id)->first();


        $toppings= [];

        if($options['group']){
            $options['group'] = unserialize($options['group']);

            foreach( $options['group'] as $key=>$group ){
                $toppings[$key] = oc_topping::where('id_topping', $group['id_group_option'])->first();
            }
        }
        
        // dd($options,$toppings);

        return Inertia::render('Admin/Catalog/Category/EditCategory',[
            'category' => $category,
            'options' => $options,
            'toppings' => $toppings,
            ]);
    }

    public function delete(Request $request){
        oc_category_to_store::whereIn('category_id', $request)->delete();
        return redirect()->back();
    }
}
