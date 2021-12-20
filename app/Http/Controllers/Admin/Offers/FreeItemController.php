<?php

namespace App\Http\Controllers\Admin\Offers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Carbon\Carbon;

use App\Models\oc_free_item;

class FreeItemController extends Controller
{
    public function index(){

        $store = 'The Terra Pizza';
        $store_id = 54;

        $items = oc_free_item::where('store_id', $store_id)->paginate(20);

        return Inertia::render('Admin/Offers/FreeItems/FreeItem',[
            'items' => $items
        ]);
        
    }
    public function create(){


        return Inertia::render('Admin/Offers/FreeItems/CreateFreeItem',[
        ]);
    }
    public function store(Request $request){
        $store = 'The Terra Pizza';
        $store_id = 54;
      
        $data = $request->toArray();
        $itemData = $data['item'];

        $item = new oc_free_item;
        $item->fill([
            'name_item' => $itemData['name_item'],
            'store_id' => $store_id
        ]);

        $item->save();

        return redirect()->route('admin.offers.free.item.index');
    }
    public function edit($id){

        $item = oc_free_item::where('id_free_item', $id)->first();

        return Inertia::render('Admin/Offers/FreeItems/EditFreeItem',[
            'item' =>  $item,
        ]);

    }
    public function update(Request $request){

        $data = $request->toArray();
        $item = $data['item'];

        oc_free_item::where('id_free_item', $item['vouchfree_item_ider_id'])->update( $item);

        return redirect()->route('admin.offers.free.item.index');

    }
    public function delete(Request $request){

        oc_free_item::whereIn('id_free_item', $request)->delete();
        return redirect()->back();
    }
}
