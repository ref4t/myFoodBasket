<?php

namespace App\Http\Controllers\Admin\Layout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\oc_store;
use App\Models\layout;
use App\Models\popular;

class LayoutItemController extends Controller
{
    public function index(Request $request){

        $store_id = $request->session()->get('store_id');

        $layout = layout::with('get_popular')->where('store_id', $store_id)->first();
        
        return Inertia::render('Admin/Layout/Item',[
            'layout'    => $layout
        ]);
    }
    
    public function insertPopular(Request $request){
        
        // dd($request->toArray());
        $store = oc_store::where('store_id', $request->session()->get('store_id'))->first();
        $store_name = wordwrap(strtolower($store['name']), 1, '-', 0);

        $image_name = wordwrap(strtolower($request['image']->getClientOriginalName()), 1, '_', 0);
        $request['image']->move(public_path('/image/gallery/popular/'), $store_name . '_' .$image_name);
        $path = "image/gallery/popular/".  $store_name . '_' . $image_name;
        
        // $image_name = wordwrap(strtolower($request['image']->getClientOriginalName()), 1, '_', 0);
        // $request['image']->move(public_path('/image/gallery/popular/'),$image_name);
        // $path = "image/gallery/popular/". $image_name;


        $gallery = new popular;

        $gallery->fill([
            'store_id'      => $request->session()->get('store_id'),
            'name'          => $request['name'],
            'description'   => $request['description'],
            'path'     => $path,
        ]);

        $gallery->save();

        return redirect()->back();
    }

    public function deletePopular($id){

        // dd($id);

        $popular = popular::where('id', $id)->delete();

        return redirect()->back();
    }
}
