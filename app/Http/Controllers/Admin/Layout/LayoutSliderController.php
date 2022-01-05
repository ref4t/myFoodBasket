<?php

namespace App\Http\Controllers\Admin\Layout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\oc_store;
use App\Models\layout;
use App\Models\slider;

class LayoutSliderController extends Controller
{
    public function index(Request $request){

        $store_id = $request->session()->get('store_id');

        $slider = slider::where('store_id', $store_id)->get();
        
        return Inertia::render('Admin/Layout/Slider',[
            'slider'    => $slider
        ]);
    }

    public function insert(Request $request){
        
        // dd($request->toArray());
        $store = oc_store::where('store_id', $request->session()->get('store_id'))->first();
        $store_name = wordwrap(strtolower($store['name']), 1, '-', 0);

        $image_name = wordwrap(strtolower($request['image']->getClientOriginalName()), 1, '_', 0);
        $request['image']->move(public_path('/image/gallery/slider/'), $store_name . '_' .$image_name);
        $path = "image/gallery/slider/".  $store_name . '_' . $image_name;
        ;


        $slider = new slider;

        $slider->fill([
            'store_id'      => $request->session()->get('store_id'),
            'title'         => $request['title'],
            'description'   => $request['description'],
            'path'          => $path,
        ]);

        $slider->save();

        return redirect()->back();
    }
    public function delete($id){

        // dd($id);

        $popular = slider::where('id', $id)->delete();

        return redirect()->back();
    }

}
