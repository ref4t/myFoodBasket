<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\oc_order;

class NewOrderController extends Controller
{
    public function index() {
        $orders = oc_order::where('order_status_id', 2)
                            ->orderby('date_added', 'desc')
                            ->paginate(10);
        $count = $orders->count();
        return Inertia::render('Admin/NewOrders',[
            'orders' => $orders,
            'count' => $count
        ]);
    }
}
