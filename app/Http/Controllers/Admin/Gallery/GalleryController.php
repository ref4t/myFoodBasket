<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\oc_store;
use App\Models\layout;
use App\Models\slider;
use App\Models\gallery;
use App\Models\popular;
use App\Models\category;

class GalleryController extends Controller
{
    public function index(Request $request){

        $store_id = $request->session()->get('store_id');

        $layout = layout::with('get_slider','get_gallery','get_popular','get_category')->where('store_id', $store_id)->first();


        return Inertia::render('Admin/Gallery/Gallery',[
            'layout'    => $layout
        ]);

    }

    public function insert(Request $request){
        
        // dd($request->toArray());
        $store = oc_store::where('store_id', $request->session()->get('store_id'))->first();
        $store_name = wordwrap(strtolower($store['name']), 1, '-', 0);

        $image_name = wordwrap(strtolower($request['image']->getClientOriginalName()), 1, '_', 0);
        $request['image']->move(public_path('/image/gallery/'), $store_name . '_' .$image_name);
        $path = "image/gallery/".  $store_name . '_' . $image_name;


        $gallery = new gallery;

        $gallery->fill([
            'store_id'      => $request->session()->get('store_id'),
            'description'   => $request['description'],
            'path'     => $path,
        ]);

        $gallery->save();

        return redirect()->back();
    }

    public function delete($id){

        // dd($id);

        $gallery = gallery::where('id', $id)->delete();

        return redirect()->back();
    }


    

    
    

    
}
