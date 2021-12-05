<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\oc_order;

class NewOrderController extends Controller
{
    public function index() {

        $query = oc_order::query();
        if(request('search')){

        
            $query-> where('firstname','LIKE','%'.request('search').'%');

            return Inertia::render('Admin/NewOrders',['orders' => $query->paginate(10)]);
        }
        else{
            $orders = oc_order::where('order_status_id', 2)
                            ->orderby('date_added', 'desc')
                            ->paginate(10);
            return Inertia::render('Admin/NewOrders',[
                'orders' => $orders,
            ]);
        }
        
    }
}
