<?php

namespace App\Http\Controllers\Admin\Layout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

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
            'store_id'          => $request->session()->get('store_id'),
            'theme'             => $data['theme'],
            'about_bg'          => $data['about_bg'],
            'about_content'     => $data['about_content'],
            'booking_bg'        => $data['booking_bg'],
            'booking'           => $data['booking'],
            'booking_content'   => $data['booking_content'],
            'gallery'           => $data['gallery'],
            'gallery_bg'        => $data['gallery_bg'],
            'gallery_content'   => $data['gallery_content'],
            'popular'           => $data['popular' ],
            'popular_bg'        => $data['popular_bg'],
            'popular_content'   => $data['popular_content'],
            'category'          => $data['category'],
            'category_bg'       => $data['category_bg'],
            'category_content'  => $data['category_content'],
            'rating_bg'         => $data['rating_bg'],
            'rating_content'    => $data['rating_content'],
            'opening_bg'        => $data['opening_bg'],
            'opening_content'   => $data['opening_content'],
        ]);

        $layout->save();

        return redirect()->back();
        
    }
    
    public function slider(Request $request){

        // dd($request['slider']);

        $image_name = wordwrap(strtolower($request['slider']->getClientOriginalName()), 1, '_', 0);
        $request['slider']->move(public_path('/image/layout/slider/'),$image_name);
        $path = "image/layout/slider/". $image_name;


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
