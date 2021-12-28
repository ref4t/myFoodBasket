<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Carbon\Carbon;

use App\Models\oc_order;
use App\Models\oc_order_cart;
use App\Models\oc_order_product;
use App\Models\oc_order_total;
use App\Models\oc_order_history;
use App\Models\oc_order_status;
use App\Models\	myfoodba_order_transaction_id;

class OrderController extends Controller
{
    public function index(Request $request){

        
        
        $query = oc_order::query();

        $query->where('store_id', $request->session()->get('store_id'));
        
        if(request('search')){ 
            $query-> where('firstname','LIKE','%'.request('search').'%');
            
        }

        if(request('field') && request('direction') ){
            
            $query->orderBy(request('field'), request('direction'));
            
        }
        
        
       
        
        return Inertia::render('Admin/Orders',[
            'orders' => $query->paginate(),
            'filters' => request()->all(['search','field','direction'])
            ]);


        
    }

    public function view($id){

        $orders = oc_order::join('oc_currency','oc_order.currency_id' , '=', 'oc_currency.currency_id')
        ->where('oc_order.order_id', '=', $id)
        ->get();

        $cart = oc_order_product::where('order_id', $id)->get();
        
        $total = oc_order_total::where('order_id', $id)->get();

        $history = oc_order_history::join('oc_order_status', 'oc_order_history.order_status_id', '=', 'oc_order_status.order_status_id' )
                                    ->where('oc_order_history.order_id', '=', $id)
                                    ->get();


        $status = oc_order_status::all();
        
        
    

        return Inertia::render('Admin/ShowOrder',[
            'orders' => $orders,
            'cart' => $cart,
            'total' => $total,
            'history' => $history,
            'status' => $status,
            'id' => $id
        ]);
    }

    public function edit($id){

        $orders = oc_order::find($id);
        $products = oc_order_product::where('order_id', $id)->get();
        $total = oc_order_total::where('order_id', $id)->get();

        
        return Inertia::render('Admin/EditOrder',[
            'orders' => $orders,
            'products' => $products,
            'total' => $total
        ]);

    }

    public function comment(Request $request){

        $data = $request->toArray();
        // dd($data);

        $history = new oc_order_history;

        $history->fill([
            'order_id'          => $data['order_id'],
            'order_status_id'   => $data['order_status_id'],
            'notify'            => $data['notify'],
            'comment'           => $data['comment'],
            'date_added'        => Carbon::now(),
        ]);

        $history->save();

        return redirect()->route('admin.dashboard.orders.index');
    }

    public function delete($id){

        oc_order_product::find($id)->delete($id);
        return redirect()->back();
        
    }

    public function update(Request $request){

        oc_order::find($request->order_id)
            ->update($request->all());

    }
}
