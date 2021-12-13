<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\oc_customer;
use App\Models\oc_customer_ip;
use App\Models\oc_address;
use App\Models\oc_store;
use App\Models\oc_country;
use App\Models\oc_zone;

class CustomerController extends Controller
{
    public function index(){

        if(!request('fname') && !request('email') ){
            $customer = oc_customer::with('getGroup','getStore')->paginate(20);
        }

        
        
        if(request('fname')){ 
            $customer =oc_customer::with('getGroup','getStore')
                                ->where('firstname','LIKE','%'.request('fname').'%')
                                ->orWhere('lastname','LIKE','%'.request('fname').'%')
                                ->paginate(20);
        }
        if(request('email')){ 
            $customer =oc_customer::with('getGroup','getStore')
                                ->where('firstname','LIKE','%'.request('email').'%')
                                ->paginate(20);
        }

        $shops = oc_store::all();
        return Inertia::render('Admin/Customer',[
            'customers'=> $customer,
            'shops' => $shops,
            'filters' => request()->all(['fname','email','ip','field','direction']),
        ]);
    }

    public function edit($id){
        $customer = oc_customer::with('getAddress','getStore')->where('customer_id', $id)->first();
        $country = oc_country::all();
        $zone = oc_zone::all();

        return Inertia::render('Admin/EditCustomer',[
            'customer' => $customer,
            'country' => $country,
            'zone' => $zone
        ]);
    }
    public function update(Request $request){
        dd($request->toArray());
    }

    

    public function destroy(Request $request){
        oc_customer::whereIn('customer_id', $request)->delete();
        return redirect(url()->previous() )->with('success', 'Order deleted successfully');
    }
    public function addAddress(Request $request){
        dd($request->toArray());
    }
}