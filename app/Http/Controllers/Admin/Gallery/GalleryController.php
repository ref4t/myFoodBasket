<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\layout;
use App\Models\slider;
use App\Models\gallery;
use App\Models\popular;
use App\Models\category;

class GalleryController extends Controller
{
    public function index(Request $request){

        $store_id = $request->session()->get('store_id');

        $layout = layout::with('get_gallery','get_popular','get_category')->where('store_id', $store_id)->first();


        return Inertia::render('Admin/Gallery/Gallery',[
            'layout'    => $layout
        ]);

    }

    public function insert(Request $request){
        
        // dd($request->toArray());
        $image_name = wordwrap(strtolower($request['image']->getClientOriginalName()), 1, '_', 0);
        $request['image']->move(public_path('/image/gallery/'),$image_name);
        $path = "image/gallery/". $image_name;


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


    public function insertPopular(Request $request){
        
        // dd($request->toArray());
        
        $image_name = wordwrap(strtolower($request['image']->getClientOriginalName()), 1, '_', 0);
        $request['image']->move(public_path('/image/gallery/popular/'),$image_name);
        $path = "image/gallery/popular/". $image_name;


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

    public function insertCategory(Request $request){
        
        // dd($request->toArray());
        
        $image_name = wordwrap(strtolower($request['image']->getClientOriginalName()), 1, '_', 0);
        $request['image']->move(public_path('/image/gallery/category/'),$image_name);
        $path = "image/gallery/category/". $image_name;


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
