<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\oc_order;
use App\Models\oc_order_cart;
use App\Models\oc_order_product;
use App\Models\oc_order_total;

class OrderController extends Controller
{
    public function index(){


        $query = oc_order::query();
        if(request('search')){
            $query-> where('firstname','LIKE','%'.request('search').'%');

            return Inertia::render('Admin/Orders',['orders' => $query->paginate(10)]);
        }
        else{
            $orders = oc_order::paginate(10,['order_id','store_name','firstname','lastname','payment_method','total','order_status_id','date_added','flag_post_code']);
        

            return Inertia::render('Admin/Orders',['orders' => $orders]);
        }

        
    }

    public function view($id){

        $orders = oc_order::where('order_id', $id)->get();

        $cart = oc_order_product::where('order_id', $id)->get();
        
        $total = oc_order_total::where('order_id', $id)->get();

        return Inertia::render('Admin/ShowOrder',[
            'orders' => $orders,
            'cart' => $cart,
            'total' => $total
        ]);
    }

    public function edit($id){

        $orders = oc_order::find($id);
        
        return Inertia::render('Admin/EditOrder',['orders' => $orders]);

    }
}
