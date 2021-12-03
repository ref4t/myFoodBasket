<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\oc_order;

class OrderController extends Controller
{
    public function index(){

        $orders = oc_order::paginate(10,['order_id','store_name','firstname','lastname','payment_method','total','order_status_id','date_added','flag_post_code']);
        

        return Inertia::render('Admin/Orders',['orders' => $orders]);
    }
}
