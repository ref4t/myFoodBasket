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
use App\Models\oc_setting;
use App\Models\oc_gender;
use App\Models\customer_order;

class NewOrderController extends Controller
{
    public function index(Request $request) {

        

        

        DB::beginTransaction();

        try {
            $shop = 'Wymondham Kebabs';
            $shop_id = $request->session()->get('store_id');

            $top_users = null;
            $total = null;
            $delivery = null;
            $collection = null;
            $card = null;
            $cash = null;
            $total_products = null;

            $now = Carbon::now();

            if( !request('record') && !request('date1') && !request('date2')  ){
                $orders = oc_order::with('getProducts','getTotal')->select([ 'order_id', 'store_name','customer_group_id', 'firstname', 'lastname','email','telephone','payment_method','payment_address_1','payment_address_2','payment_city','payment_postcode','payment_company','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                
                ->where('store_name', '=', $shop)
                ->orderBy('date_added','DESC')
                ->paginate(20);

            $top_users = oc_order::where('store_name', $shop )->select('customer_id', 'firstname','lastname',DB::raw('SUM(total) AS sumtotal'))
            ->groupBy('customer_id','firstname','lastname')
            ->orderByRaw('COUNT(*) DESC')
            ->take(5)
            ->get();



            $total =  oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))->where('store_name', '=', $shop)->get();

            $delivery = oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))->where('store_name', '=', $shop)->where('flag_post_code','=' , 'delivery')->get();

            $collection = oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))->where('store_name', '=', $shop)->where('flag_post_code','=' , 'collection')->get();

            $card = oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))->where('store_name', '=', $shop)->where('payment_method','=' , 'CARD')->get();

            $cash = oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))->where('store_name', '=', $shop)->where('payment_method','=' , 'Cash on Delivery')->get();



            // total ordered products
            $total_products = oc_order_product::join('oc_order','oc_order_product.order_id', '=', 'oc_order.order_id')
            ->where('oc_order.store_name', '=', $shop)
            ->whereDate('oc_order.date_added','>=', $now->subYear())
            ->count();
           
        }

           

            

            

            if(request('search')){ 
                $orders = oc_order::select([ 'order_id', 'store_name','customer_group_id', 'firstname', 'lastname','email','telephone','payment_method','payment_address_1','payment_address_2','payment_city','payment_postcode','payment_company','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                    ->where('store_name', $shop )
                                    ->where('firstname','LIKE','%'.request('search').'%')
                                    ->orWhere('lastname','LIKE','%'.request('search').'%')
                                    ->paginate(20);
            }
            if(request('order_type')){ 
                $orders = oc_order::select([ 'order_id', 'store_name','customer_group_id', 'firstname', 'lastname','email','telephone','payment_method','payment_address_1','payment_address_2','payment_city','payment_postcode','payment_company','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                    ->where('store_name', $shop )
                                    ->where('flag_post_code','LIKE','%'.request('order_type').'%')
                                    ->paginate(20);
            }
            if(request('order_no')){ 
                $orders = oc_order::select([ 'order_id', 'store_name','customer_group_id', 'firstname', 'lastname','email','telephone','payment_method','payment_address_1','payment_address_2','payment_city','payment_postcode','payment_company','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                    ->where('store_name', $shop )
                                    ->where('order_id','LIKE','%'.request('order_no').'%')
                                    ->paginate(20);
            }
            if(request('status')){ 
                $orders = oc_order::select([ 'order_id', 'store_name','customer_group_id', 'firstname', 'lastname','email','telephone','payment_method','payment_address_1','payment_address_2','payment_city','payment_postcode','payment_company','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                    ->where('store_name', $shop )
                                    ->where('order_status_id','LIKE','%'.request('status').'%')
                                    ->paginate(20);
            }

            
            if(request('record') == 1){
                $orders = oc_order::select([ 'order_id', 'store_name','customer_group_id', 'firstname', 'lastname','email','telephone','payment_method','payment_address_1','payment_address_2','payment_city','payment_postcode','payment_company','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                    ->where('store_name', $shop )
                                    ->whereDay('date_added', '=', Carbon::today()->toDateString())
                                    ->orderBy('date_added','DESC')
                                    ->paginate(20);

                $top_users = oc_order::where('store_name', $shop )->select('customer_id', 'firstname','lastname',DB::raw('SUM(total) AS sumtotal'))
                ->whereDay('date_added', '=', Carbon::today()->toDateString())
                ->groupBy('customer_id','firstname','lastname')
                ->orderByRaw('COUNT(*) DESC')
                ->take(5)
                ->get();
    
    
    
                $total =  oc_order::whereDate('date_added','>=', Carbon::today()->toDateString())->select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where('store_name', '=', $shop)
                ->get();
    
                $delivery = oc_order::whereDate('date_added','>=', Carbon::today()->toDateString())->select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where('store_name', '=', $shop)
                ->where('flag_post_code','=' , 'delivery')
                ->get();
    
                $collection = oc_order::whereDate('date_added','>=', Carbon::today()->toDateString())->select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where('store_name', '=', $shop)
                ->where('flag_post_code','=' , 'collection')
                ->get();
    
                $card = oc_order::whereDate('date_added','>=', Carbon::today()->toDateString())->select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where('store_name', '=', $shop)
                ->where('payment_method','=' , 'CARD')
                ->get();
    
                $cash = oc_order::whereDate('date_added','>=', Carbon::today()->toDateString())->select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where('store_name', '=', $shop)
                ->where('payment_method','=' , 'Cash on Delivery')
                ->get();

                $total_products = oc_order_product::join('oc_order','oc_order_product.order_id', '=', 'oc_order.order_id')
                ->where('oc_order.store_name', '=', $shop)
                ->whereDate('oc_order.date_added','>=', Carbon::today()->toDateString())
                ->count();
    

                
            }
            if(request('record') == 2){
                $orders = oc_order::select([ 'order_id', 'store_name','customer_group_id', 'firstname', 'lastname','email','telephone','payment_method','payment_address_1','payment_address_2','payment_city','payment_postcode','payment_company','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                    ->where('store_name', $shop )
                                    ->whereDate('date_added','>=', $now->subWeek())
                                    ->orderBy('date_added','DESC')
                                    ->paginate(20);
                
                $top_users = oc_order::where('store_name', $shop )->select('customer_id', 'firstname','lastname',DB::raw('SUM(total) AS sumtotal'))
                ->where([['store_name', '=', $shop] , ['date_added','>=',  $now->subWeek()] ])
                ->groupBy('customer_id','firstname','lastname')
                ->orderByRaw('COUNT(*) DESC')
                ->take(5)
                ->get();

                $total =  oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where([['store_name', '=', $shop] , ['date_added','>=',  $now->subWeek()] ])
                ->get();
    
                $delivery = oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where([['store_name', '=', $shop] , ['date_added','>=',  $now->subWeek()] ])
                ->where('flag_post_code','=' , 'delivery')
                ->get();
    
                $collection = oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where([['store_name', '=', $shop] , ['date_added','>=',  $now->subWeek()] ])
                ->where('flag_post_code','=' , 'collection')
                ->get();
    
                $card = oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where([['store_name', '=', $shop] , ['date_added','>=',  $now->subWeek()] ])
                ->where('payment_method','=' , 'CARD')
                ->get();
    
                $cash = oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where([['store_name', '=', $shop] , ['date_added','>=',  $now->subWeek()] ])
                ->where('payment_method','=' , 'Cash on Delivery')
                ->get();

                $total_products = oc_order_product::join('oc_order','oc_order_product.order_id', '=', 'oc_order.order_id')
                ->where('oc_order.store_name', '=', $shop)
                ->whereDate('oc_order.date_added','>=', $now->subWeek())
                ->count();
    
            }
            if(request('record') == 3){
                $orders = oc_order::select([ 'order_id', 'store_name','customer_group_id', 'firstname', 'lastname','email','telephone','payment_method','payment_address_1','payment_address_2','payment_city','payment_postcode','payment_company','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                    ->where('store_name', $shop )
                                    ->whereDate('date_added','>=', $now->subMonth())
                                    ->orderBy('date_added','DESC')
                                    ->paginate(20);

                $top_users = oc_order::where('store_name', $shop )->select('customer_id', 'firstname','lastname',DB::raw('SUM(total) AS sumtotal'))
                ->where([['store_name', '=', $shop] , ['date_added','>=',  $now->subMonth()] ])
                ->groupBy('customer_id','firstname','lastname')
                ->orderByRaw('COUNT(*) DESC')
                ->take(5)
                ->get();

                $total =  oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where([['store_name', '=', $shop] , ['date_added','>=',  $now->subMonth()] ])
                ->get();
    
                $delivery = oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where([['store_name', '=', $shop] , ['date_added','>=',  $now->subMonth()] ])
                ->where('flag_post_code','=' , 'delivery')
                ->get();
    
                $collection = oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where([['store_name', '=', $shop] , ['date_added','>=',  $now->subMonth()] ])
                ->where('flag_post_code','=' , 'collection')
                ->get();
    
                $card = oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where([['store_name', '=', $shop] , ['date_added','>=',  $now->subMonth()] ])
                ->where('payment_method','=' , 'CARD')
                ->get();
    
                $cash = oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where([['store_name', '=', $shop] , ['date_added','>=',  $now->subMonth()] ])
                ->where('payment_method','=' , 'Cash on Delivery')
                ->get();

                $total_products = oc_order_product::join('oc_order','oc_order_product.order_id', '=', 'oc_order.order_id')
                ->where('oc_order.store_name', '=', $shop)
                ->whereDate('oc_order.date_added','>=', $now->subMonth())
                ->count();
            }
            if(request('record') == 4){
                $orders = oc_order::select([ 'order_id', 'store_name','customer_group_id', 'firstname', 'lastname','email','telephone','payment_method','payment_address_1','payment_address_2','payment_city','payment_postcode','payment_company','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                    ->where('store_name', $shop )
                                    ->whereDate('date_added','>=', $now->subYear())
                                    ->orderBy('date_added','DESC')
                                    ->paginate(20);

               $top_users = oc_order::where('store_name', $shop )->select('customer_id', 'firstname','lastname',DB::raw('SUM(total) AS sumtotal'))
                ->where([['store_name', '=', $shop] , ['date_added','>=',  $now->subYear()] ])
                ->groupBy('customer_id','firstname','lastname')
                ->orderByRaw('COUNT(*) DESC')
                ->take(5)
                ->get();

                $total =  oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where([['store_name', '=', $shop] , ['date_added','>=',  $now->subYear()] ])
                ->get();
    
                $delivery = oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where([['store_name', '=', $shop] , ['date_added','>=',  $now->subYear()] ])
                ->where('flag_post_code','=' , 'delivery')
                ->get();
    
                $collection = oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where([['store_name', '=', $shop] , ['date_added','>=',  $now->subYear()] ])
                ->where('flag_post_code','=' , 'collection')
                ->get();
    
                $card = oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where([['store_name', '=', $shop] , ['date_added','>=',  $now->subYear()] ])
                ->where('payment_method','=' , 'CARD')
                ->get();
    
                $cash = oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where([['store_name', '=', $shop] , ['date_added','>=',  $now->subYear()] ])
                ->where('payment_method','=' , 'Cash on Delivery')
                ->get();

                $total_products = oc_order_product::join('oc_order','oc_order_product.order_id', '=', 'oc_order.order_id')
                ->where('oc_order.store_name', '=', $shop)
                ->whereDate('oc_order.date_added','>=', $now->subYear())
                ->count();
                
            }
            if(request('date1') && request('date2') ){
                $startDate = strtok(request('date1'), 'T');
                $endDate = strtok(request('date2'), 'T');

                $orders = oc_order::select([ 'order_id', 'store_name','customer_group_id', 'firstname', 'lastname','email','telephone','payment_method','payment_address_1','payment_address_2','payment_city','payment_postcode','payment_company','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                    ->where('store_name', $shop )
                                    ->whereDate('date_added', '>=', $startDate)
                                    ->whereDate('date_added', '<=', $endDate)
                                    ->orderBy('date_added','DESC')
                                    ->paginate(20);
                
                $top_users = oc_order::where('store_name', $shop )->select('customer_id', 'firstname','lastname',DB::raw('SUM(total) AS sumtotal'))
                ->where([['store_name', '=', $shop] , ['date_added','>=',  $startDate] , ['date_added','<=',  $endDate]])
                ->groupBy('customer_id','firstname','lastname')
                ->orderByRaw('COUNT(*) DESC')
                ->take(5)
                ->get();

                $total =  oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where([['store_name', '=', $shop] , ['date_added','>=',  $startDate] , ['date_added','<=',  $endDate]])
                ->get();
    
                $delivery = oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where([['store_name', '=', $shop] , ['date_added','>=',  $startDate] , ['date_added','<=',  $endDate]])
                ->where('flag_post_code','=' , 'delivery')
                ->get();
    
                $collection = oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where([['store_name', '=', $shop] , ['date_added','>=',  $startDate] , ['date_added','<=',  $endDate]])
                ->where('flag_post_code','=' , 'collection')
                ->get();
    
                $card = oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where([['store_name', '=', $shop] , ['date_added','>=',  $startDate] , ['date_added','<=',  $endDate]])
                ->where('payment_method','=' , 'CARD')
                ->get();
    
                $cash = oc_order::select(DB::raw("COUNT(*) as count"), DB::raw("SUM(total) as total"))
                ->where([['store_name', '=', $shop] , ['date_added','>=',  $startDate] , ['date_added','<=',  $endDate]])
                ->where('payment_method','=' , 'Cash on Delivery')
                ->get();

                $total_products = oc_order_product::join('oc_order','oc_order_product.order_id', '=', 'oc_order.order_id')
                ->where('oc_order.store_name', '=', $shop)
                ->whereDate('oc_order.date_added','>=', $startDate)
                ->whereDate('oc_order.date_added','<=', $endDate)
                ->count();
                
            }
            

            if(request('field') && request('direction') ){
                
                $orders = oc_order::select([ 'order_id', 'store_name','customer_group_id', 'firstname', 'lastname','email','telephone','payment_method','payment_address_1','payment_address_2','payment_city','payment_postcode','payment_company','date_added', 'order_status_id','timedelivery','flag_post_code' ,'total'])
                                    ->where('store_name', $shop )
                                    ->orderBy(request('field'), request('direction'))
                                    ->paginate(20);
                
            }

            $status = oc_order_status::all();

            $gender = oc_gender::all();
            
            $data = [];

            $settings=oc_setting::where('store_id','=',$shop_id)->where('group','=','config')->get();

            

                foreach ($settings as $result) {
                    if( $result['key'] == 'config_name' || $result['key'] == 'config_address' || $result['key'] == 'config_telephone'  || $result['key'] == 'map_post_code' ){
                        if (!$result['serialized']) {
                            $data[$result['key']] = $result['value'];
                        } else {
                            $data[$result['key']] = unserialize($result['value']);
                        }
                    }
                   
                }

            
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
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
            'settings' => $data,
            'gender' => $gender
            ]);
        
        
    }

    public function destroy(Request $request){
        oc_order::whereIn('order_id', $request)->delete();
        return redirect()->back();
    }
}
