<?php

namespace App\Http\Controllers\Admin\Layout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\oc_store;
use App\Models\layout;
use App\Models\popular;
use App\Models\oc_product;
use App\Models\oc_product_to_store;

class LayoutItemController extends Controller
{
    public function index(Request $request){

        $store_id = $request->session()->get('store_id');

        $layout = layout::with('get_popular')->where('store_id', $store_id)->first();

        $items = oc_product::with('get_description')->join('oc_product_to_store','oc_product.product_id','=','oc_product_to_store.product_id')->where('oc_product_to_store.store_id', $store_id)->get();
        
        return Inertia::render('Admin/Layout/Item',[
            'layout'    => $layout,
            'items'      => $items
        ]);
    }
    
    public function insert(Request $request){
        
        // dd($request->toArray());

        $item = $request['item'];
        // $store = oc_store::where('store_id', $request->session()->get('store_id'))->first();
       


        $popular = new popular;

        $popular->fill([
            'store_id'      => $request->session()->get('store_id'),
            'name'          => $item['get_description']['name'],
            'description'   => $item['get_description']['description'],
            'path'          => $item['image'],
        ]);

        $popular->save();

        return redirect()->back();
    }

    public function delete($id){

        // dd($id);

        $popular = popular::where('id', $id)->delete();

        return redirect()->back();
    }
}
