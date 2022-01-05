<?php

namespace App\Http\Controllers\Admin\Layout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\oc_store;
use App\Models\layout;
use App\Models\category;

class LayoutCategoryController extends Controller
{
    public function index(Request $request){

        $store_id = $request->session()->get('store_id');

        $layout = layout::with('get_category')->where('store_id', $store_id)->first();
        
        return Inertia::render('Admin/Layout/Category',[
            'layout'    => $layout
        ]);
    }

    public function insertCategory(Request $request){
        
        // dd($request->toArray());

        $store = oc_store::where('store_id', $request->session()->get('store_id'))->first();
        $store_name = wordwrap(strtolower($store['name']), 1, '-', 0);

        $image_name = wordwrap(strtolower($request['image']->getClientOriginalName()), 1, '_', 0);
        $request['image']->move(public_path('/image/gallery/category/'), $store_name . '_' .$image_name);
        $path = "image/gallery/category/".  $store_name . '_' . $image_name;
        
        
        // $image_name = wordwrap(strtolower($request['image']->getClientOriginalName()), 1, '_', 0);
        // $request['image']->move(public_path('/image/gallery/category/'),$image_name);
        // $path = "image/gallery/category/". $image_name;


        $gallery = new category;

        $gallery->fill([
            'store_id'      => $request->session()->get('store_id'),
            'title'          => $request['name'],
            'description'   => $request['description'],
            'path'     => $path,
        ]);

        $gallery->save();

        return redirect()->back();
    }

    public function deleteCategory($id){

        // dd($id);

        $gallery = category::where('id', $id)->delete();

        return redirect()->back();
    }
}
