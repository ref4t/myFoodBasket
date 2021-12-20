<?php

namespace App\Http\Controllers\Admin\Offers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Carbon\Carbon;

use App\Models\oc_free_rule;
use App\Models\oc_free_item;

class CartRuleController extends Controller
{
    public function index(){

        $store = 'The Terra Pizza';
        $store_id = 54;

        $rules = oc_free_rule::where('id_store', $store_id)->paginate(20);

        return Inertia::render('Admin/Offers/FreeItems/Cartrule',[
            'rules' => $rules
        ]);
        
    }
    public function create(){
        $store = 'The Terra Pizza';
        $store_id = 54;

        $items = oc_free_item::where('store_id', $store_id)->get();
        return Inertia::render('Admin/Offers/FreeItems/CreateCartrule',[
            'free_items' => $items,
        ]);
    }
    public function store(Request $request){
        $store = 'The Terra Pizza';
        $store_id = 54;
      
        $data = $request->toArray();

        $rule = $data['rule'];
        $items = $data['items'];

        $itemsData = '';

        foreach($items as $item){
            $itemsData = $itemsData . $item . ":";
        }

        $itemsData = substr($itemsData, 0, -1);

        $name_rule =  $rule['name_rule'];
        $min_total = $rule['min_total'];

        $rule = new oc_free_rule;
        $rule->fill([
            'name_rule' => $name_rule,
            'id_store' => $store_id,
            'id_item' => $itemsData,
            'min_total' => $min_total
        ]);

        $rule->save();

        return redirect()->route('admin.offers.free.rule.index');
    }
    public function edit($id){
        $store_id = 54;

        $rule = oc_free_rule::where('id_rule', $id)->first();
        $items = oc_free_item::where('store_id', $store_id)->get();

        return Inertia::render('Admin/Offers/FreeItems/EditCartrule',[
            'rule' =>  $rule,
            'free_items' =>  $items,
        ]);

    }
    public function update(Request $request){

        $store = 'The Terra Pizza';
        $store_id = 54;
      
        $data = $request->toArray();

        $rule = $data['rule'];
        $items = $data['items'];

        $itemsData = '';

        foreach($items as $item){
            $itemsData = $itemsData . $item . ":";
        }

        $itemsData = substr($itemsData, 0, -1);

        $name_rule =  $rule['name_rule'];
        $min_total = $rule['min_total'];

        $rule['id_item'] = $itemsData;

        

        oc_free_rule::where('id_rule', $rule['id_rule'])->update( $rule);

        return redirect()->route('admin.offers.free.rule.index');

    }
    public function delete(Request $request){

        oc_free_rule::whereIn('id_rule', $request)->delete();
        return redirect()->back();
    }
}
