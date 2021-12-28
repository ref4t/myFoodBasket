<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Carbon\Carbon;

use App\Models\oc_product_icons;

class ProductIconController extends Controller
{
   
    public function index(){
        $data = oc_product_icons::paginate(20);
    
        return Inertia::render('Admin/Settings/ProductIcon/ProductIcon',[
            'data' => $data
        ]);
    }
    public function create(){
    

        return Inertia::render('Admin/Settings/ProductIcon/CreateProductIcon',[
            
        ]);
    }
    public function store(Request $request){


        $icon = new oc_product_icons;

        $icon->fill([
            'icon_name' => $request['icon_name'],
            'icon_desc' => $request['icon_desc'],
            'icon_url' => $request['icon_url'],
            'icon_sort' => $request['icon_sort'],
            'date_added' => Carbon::now(),
        ]);

        $icon->save();
    
        return redirect()->route('admin.settings.product_icon.index');
    }
    public function edit($id){
        $data = oc_product_icons::where('id',$id)->first();
    
        return Inertia::render('Admin/Settings/ProductIcon/EditProductIcon',[
            'data' => $data
        ]);
    }

    public function update(Request $request){
        oc_product_icons::where('id', $request['id'])->update( $request->all());
    
        return redirect()->route('admin.settings.product_icon.index');
    }

    

    public function delete(Request $request){

        oc_product_icons::whereIn('id', $request)->delete();
        return redirect()->back();
    }
}
