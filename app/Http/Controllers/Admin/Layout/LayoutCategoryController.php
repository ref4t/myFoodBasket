<?php

namespace App\Http\Controllers\Admin\Layout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\oc_store;
use App\Models\layout;
use App\Models\category;
use App\Models\oc_category;

class LayoutCategoryController extends Controller
{
    public function index(Request $request){

        $store_id = $request->session()->get('store_id');

        $layout = layout::with('get_category')->where('store_id', $store_id)->first();

        $categories = oc_category::with('get_description')->join('oc_category_to_store','oc_category.category_id','=','oc_category_to_store.category_id')
                                                        ->where('oc_category_to_store.store_id', $store_id)->get();
        
        return Inertia::render('Admin/Layout/Category',[
            'layout'        => $layout,
            'categories'    => $categories
        ]);
    }

    public function insert(Request $request){
        
        // dd($request->toArray());

        $store = oc_store::where('store_id', $request->session()->get('store_id'))->first();
        // $store_name = wordwrap(strtolower($store['name']), 1, '-', 0);

        // $image_name = wordwrap(strtolower($request['image']->getClientOriginalName()), 1, '_', 0);
        // $request['image']->move(public_path('/image/gallery/category/'), $store_name . '_' .$image_name);
        // $path = "image/gallery/category/".  $store_name . '_' . $image_name;
        
        
        // $image_name = wordwrap(strtolower($request['image']->getClientOriginalName()), 1, '_', 0);
        // $request['image']->move(public_path('/image/gallery/category/'),$image_name);
        // $path = "image/gallery/category/". $image_name;

        $categories = oc_category::with('get_description')->where('category_id', $request['category'])->first();

        // dd($categories);



        $gallery = new category;

        $gallery->fill([
            'store_id'          => $request->session()->get('store_id'),
            'title'             => $categories['get_description']['name'],
            'description'       => $categories['get_description']['description'],
            'path'              => $categories['image'],
        ]);

        $gallery->save();

        return redirect()->back();
    }

    public function delete($id){

        // dd($id);

        $gallery = category::where('id', $id)->delete();

        return redirect()->back();
    }
}
