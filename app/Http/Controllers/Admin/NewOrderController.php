<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use App\Models\oc_order;
use App\Models\oc_order_product;
use App\Models\oc_order_status;

class NewOrderController extends Controller
{
    public function index() {

        

        

        DB::beginTransaction();

        try {
            $shop = 'Wymondham Kebabs';
            $shop_id = 46;

            $orders = oc_order::select([ 'order_id', 'store_name', 'firstname', 'lastname','payment_method','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                ->where([['store_name', '=', $shop] , ['date_added','>=', Carbon::now()->subYear()]])
                                ->orderBy('date_added','DESC')
                                ->paginate(20);
                                

            $top_users = oc_order::where('store_name', $shop )->select('customer_id', 'firstname','lastname',DB::raw('SUM(total) AS sumtotal'))
                ->groupBy('customer_id','firstname','lastname')
                ->orderByRaw('COUNT(*) DESC')
                ->take(5)
                ->get();

            

            $total =  oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))->where([['store_name', '=', $shop] , ['date_added','>=', Carbon::now()->subYear()]])->get();

            $delivery = oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))->where([['store_name', '=', $shop] , ['date_added','>=', Carbon::now()->subYear()]])->where('flag_post_code','=' , 'delivery')->get();

            $collection = oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))->where([['store_name', '=', $shop] , ['date_added','>=', Carbon::now()->subYear()]])->where('flag_post_code','=' , 'collection')->get();

            $card = oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))->where([['store_name', '=', $shop] , ['date_added','>=', Carbon::now()->subYear()]])->where('payment_method','=' , 'CARD')->get();

            $cash = oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))->where([['store_name', '=', $shop] , ['date_added','>=', Carbon::now()->subYear()]])->where('payment_method','=' , 'Cash on Delivery')->get();
            
            

            // total ordered products
            $total_products = oc_order_product::join('oc_order','oc_order_product.order_id', '=', 'oc_order.order_id')
                                                ->where('oc_order.store_name', '=', $shop)
                                                ->count();

            // $total_products = oc_order::with('getShopid')->where('store_id', '=', $shop_id )->first();

            $now = Carbon::now();

            if(request('search')){ 
                $orders = oc_order::select([ 'order_id', 'store_name', 'firstname', 'lastname','payment_method','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                    ->where('store_name', $shop )
                                    ->where('firstname','LIKE','%'.request('search').'%')
                                    ->paginate(20);
            }
            if(request('order_type')){ 
                $orders = oc_order::select([ 'order_id', 'store_name', 'firstname', 'lastname','payment_method','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                    ->where('store_name', $shop )
                                    ->where('flag_post_code','LIKE','%'.request('order_type').'%')
                                    ->paginate(20);
            }
            if(request('order_no')){ 
                $orders = oc_order::select([ 'order_id', 'store_name', 'firstname', 'lastname','payment_method','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                    ->where('store_name', $shop )
                                    ->where('order_id','LIKE','%'.request('order_no').'%')
                                    ->paginate(20);
            }
            if(request('status')){ 
                $orders = oc_order::select([ 'order_id', 'store_name', 'firstname', 'lastname','payment_method','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                    ->where('store_name', $shop )
                                    ->where('order_status_id','LIKE','%'.request('status').'%')
                                    ->paginate(20);
            }

            
            if(request('record') == 1){
                $orders = oc_order::select([ 'order_id', 'store_name', 'firstname', 'lastname','payment_method','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                    ->where('store_name', $shop )
                                    ->whereDay('date_added', '=', Carbon::today()->toDateString())
                                    ->orderBy('date_added','DESC')
                                    ->paginate(20);

                
            }
            if(request('record') == 2){
                // By week
            }
            if(request('record') == 3){
                $orders = oc_order::select([ 'order_id', 'store_name', 'firstname', 'lastname','payment_method','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                    ->where('store_name', $shop )
                                    ->whereDate('date_added','>=', $now->subMonth())
                                    ->orderBy('date_added','DESC')
                                    ->paginate(20);
            }
            if(request('record') == 4){
                $orders = oc_order::select([ 'order_id', 'store_name', 'firstname', 'lastname','payment_method','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                    ->where('store_name', $shop )
                                    ->whereDate('date_added','>=', $now->subYear())
                                    ->orderBy('date_added','DESC')
                                    ->paginate(20);
                
            }
            

            if(request('field') && request('direction') ){
                
                $orders = oc_order::select([ 'order_id', 'store_name', 'firstname', 'lastname','payment_method','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                    ->where('store_name', $shop )
                                    ->orderBy(request('field'), request('direction'))
                                    ->paginate(20);
                
            }

            $status = oc_order_status::all();
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            // something went wrong
        }
        DB::commit();

        
        
        return Inertia::render('Admin/NewOrders',[
            'orders' => $orders,
            'filters' => request()->all(['search','field','direction','record','order_type','order_no','status']),
            'top_customer' => $top_users,
            'total' => $total,
            'delivery' => $delivery,
            'collection' => $collection,
            'card' => $card,
            'cash' => $cash,
            'total_products' => $total_products,
            'status' => $status,
            'shop_name' => $shop,
            ]);
        
        
    }
}
