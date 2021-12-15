<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\oc_order;
use App\Models\oc_order_cart;
use App\Models\oc_order_product;
use App\Models\oc_order_total;
use App\Models\oc_order_history;
use App\Models\oc_order_status;
use App\Models\	myfoodba_order_transaction_id;

class OrderController extends Controller
{
    public function index(){

        
        
        $query = oc_order::query();
        
        if(request('search')){ 
            $query-> where('firstname','LIKE','%'.request('search').'%');
            
        }
        if(request('id')){ 
            $query-> where('order_id','LIKE','%'.request('id').'%');
            
        }
        if(request('status')){ 
            $query-> where('order_status_id','LIKE','%'.request('status').'%');
            
        }
        if(request('total')){ 
            $query-> where('total','LIKE','%'.request('total').'%');
            
        }
        if(request('date')){ 
            // dd(strtok(request('date'), 'T'));
            $query-> whereDate('date_added','=',strtok(request('date'), 'T'));
            
        }

        if(request('field') && request('direction') ){
            
            $query->orderBy(request('field'), request('direction'));
            
        }
        
        $status = oc_order_status::all();
       
        
        return Inertia::render('Admin/Orders',[
            'orders' => $query->paginate(),
            'status' => $status,
            'filters' => request()->all(['search','id','status','total','date','payment','field','direction'])
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

        oc_order_history::create($request->toArray());

        return redirect()->route('admin.dashboard.orders');
    }

    public function delete($id){

        oc_order_product::find($id)->delete($id);
        return redirect(url()->previous());
        
    }

    public function update(Request $request){

        oc_order::find($request->order_id)
            ->update($request->all());

    }
}
