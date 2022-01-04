<?php

namespace App\Http\Controllers\Admin\Layout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\oc_store;
use App\Models\layout;
use App\Models\slider;


class LayoutController extends Controller
{
    public function index(Request $request){

        $store_id = $request->session()->get('store_id');

        $layout = layout::with('get_slider')->where('store_id', $store_id)->first();
        
        return Inertia::render('Admin/Layout/Layout',[
            'layout'    => $layout
        ]);
    }

    public function update(Request $request){

        $data = $request->all();

        // dd($data);

        $layout =  layout::find($data['id']);

        $layout->fill([
            'store_id'               => $request->session()->get('store_id'),
            'theme'                  => $data['theme'],
            'slider_title'           => $data['slider_title'],
            'slider_description'     => $data['slider_description'],
            'about_bg'               => $data['about_bg'],
            'about_content'          => $data['about_content'],
            'about_title'            => $data['about_title'],
            'about_description'      => $data['about_description'],
            'booking_bg'             => $data['booking_bg'],
            'booking'                => $data['booking'],
            'booking_content'        => $data['booking_content'],
            'booking_description'    => $data['booking_description'],
            'gallery'                => $data['gallery'],
            'gallery_bg'             => $data['gallery_bg'],
            'gallery_content'        => $data['gallery_content'],
            'popular'                => $data['popular' ],
            'popular_bg'             => $data['popular_bg'],
            'popular_content'        => $data['popular_content'],
            'popular_description'    => $data['popular_description'],
            'category'               => $data['category'],
            'category_bg'            => $data['category_bg'],
            'category_content'       => $data['category_content'],
            'rating_bg'              => $data['rating_bg'],
            'rating_content'         => $data['rating_content'],
            'opening_bg'             => $data['opening_bg'],
            'opening_content'        => $data['opening_content'],
        ]);

        $layout->save();

        return redirect()->back();
        
    }
    
    public function slider(Request $request){

        // dd($request['slider']);

        $store = oc_store::where('store_id', $request->session()->get('store_id'))->first();
        $store_name = wordwrap(strtolower($store['name']), 1, '-', 0);

        $image_name = wordwrap(strtolower($request['slider']->getClientOriginalName()), 1, '_', 0);
        $request['slider']->move(public_path('/image/layout/slider/'),$store_name . '_' . $image_name);
        $path = "image/layout/slider/". $store_name . '_' . $image_name;


        $slider = new slider;

        $slider->fill([
            'store_id' => $request->session()->get('store_id'),
            'path'     => $path,
        ]);

        $slider->save();

        return redirect()->back();
    }

    public function delete($id){


        $slider = slider::where('id', $id)->delete();



        return redirect()->back();
    }
}
