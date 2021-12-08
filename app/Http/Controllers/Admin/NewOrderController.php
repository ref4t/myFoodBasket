<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use App\Models\oc_order;
use App\Models\oc_order_product;

class NewOrderController extends Controller
{
    public function index() {

        

        

        DB::beginTransaction();

        try {
            $shop = 'Wymondham Kebabs';

            $orders = oc_order::select([ 'order_id', 'store_name', 'firstname', 'lastname','payment_method','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                ->where('store_name', $shop )->paginate(10);


            $top_users = oc_order::where('store_name', $shop )->select('customer_id', 'firstname','lastname',DB::raw('SUM(total) AS sumtotal'))
                ->groupBy('customer_id','firstname','lastname')
                ->orderByRaw('COUNT(*) DESC')
                ->take(5)
                ->get();

            
            

            $total_orders =  DB::table('oc_order')->where('store_name', $shop )->sum('total');
            $delivery_total =  DB::table('oc_order')->where('store_name', $shop )->where('flag_post_code','=' , 'delivery')->sum('total');
            $collection_total =  DB::table('oc_order')->where('store_name', $shop )->where('flag_post_code','=' , 'collection')->sum('total');
            $card_total =  DB::table('oc_order')->where('store_name', $shop )->where('payment_method','=' , 'CARD')->sum('total');
            $cash_total =  DB::table('oc_order')->where('store_name', $shop )->where('payment_method','=' , 'Cash on Delivery')->sum('total');

            // sales
            $sales = DB::table('oc_order')->where('store_name', $shop )->count('order_id');
            $delivery_sales = DB::table('oc_order')->where('store_name', $shop )->where('flag_post_code','=' , 'delivery')->count('order_id');
            $collection_sales = DB::table('oc_order')->where('store_name', $shop )->where('flag_post_code','=' , 'collection')->count('order_id');
            $card_sales = DB::table('oc_order')->where('store_name', $shop )->where('payment_method','=' , 'CARD')->count('order_id');
            $cash_sales = DB::table('oc_order')->where('store_name', $shop )->where('payment_method','=' , 'Cash on Delivery')->count('order_id');
            

            // total ordered products
            $total_products = oc_order_product::join('oc_order','oc_order_product.order_id', '=', 'oc_order.order_id')
                                                ->select('order_product_id','oc_order.order_id')
                                                ->where('oc_order.store_name', '=', $shop)
                                                ->count('order_product_id');

            $now = Carbon::now();

            if(request('search')){ 
                $orders = oc_order::select([ 'order_id', 'store_name', 'firstname', 'lastname','payment_method','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                    ->where('store_name', $shop )
                                    -> where('firstname','LIKE','%'.request('search').'%')
                                    ->paginate(10);
            }

            if(request('field') && request('direction') ){
                
                $orders = oc_order::select([ 'order_id', 'store_name', 'firstname', 'lastname','payment_method','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                    ->where('store_name', $shop )
                                    ->orderBy(request('field'), request('direction'))
                                    ->paginate(10);
                
            }
            if(request('record') == 1){
                $orders = oc_order::select([ 'order_id', 'store_name', 'firstname', 'lastname','payment_method','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                    ->where('store_name', $shop )
                                    ->whereDay('date_added', '=', Carbon::today())
                                    ->paginate(10);
            }
            if(request('record') == 2){
                // By week
            }
            if(request('record') == 3){
                $orders = oc_order::select([ 'order_id', 'store_name', 'firstname', 'lastname','payment_method','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                    ->where('store_name', $shop )
                                    ->whereMonth('date_added', '=', $now->subMonth()->month)
                                    ->paginate(10);
            }
            if(request('record') == 4){
                $orders = oc_order::select([ 'order_id', 'store_name', 'firstname', 'lastname','payment_method','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                    ->where('store_name', $shop )
                                    ->whereYear('date_added', '=',  $now->year)
                                    ->paginate(10);
                
            }
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            // something went wrong
        }
        DB::commit();

        
        
        return Inertia::render('Admin/NewOrders',[
            'orders' => $orders,
            'filters' => request()->all(['search','field','direction','record']),
            'top_customer' => $top_users,
            'total_orders' => $total_orders,
            'delivery_total' => $delivery_total,
            'collection_total' => $collection_total,
            'card_total' => $card_total,
            'cash_total' => $cash_total,
            'sales' => $sales,
            'delivery_sales' => $delivery_sales,
            'collection_sales' => $collection_sales,
            'card_sales' => $card_sales,
            'cash_sales' => $cash_sales,
            'total_products' => $total_products
            ]);
        
        
    }
}
