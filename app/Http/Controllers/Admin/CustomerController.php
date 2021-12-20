<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Hash;
use Redirect;

use App\Models\oc_customer;
use App\Models\oc_address;
use App\Models\oc_store;
use App\Models\oc_country;
use App\Models\oc_zone;
use App\Models\oc_customer_history;
use App\Models\oc_customer_transaction;
use App\Models\oc_customer_reward;
use App\Models\oc_customer_ip;
use App\Models\oc_customer_ban_ip;

class CustomerController extends Controller
{
    public function index(){

        if(!request('fname') && !request('email') &&  !request('field') && !request('direction')){
            $customer = oc_customer::with('getGroup','getStore')->paginate(20);
        }

        if(request('field') && request('direction') ){
            
            $customer = oc_customer::with('getGroup','getStore')
                    ->orderBy(request('field'), request('direction'))
                    ->paginate(20);
            
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

    public function create(){
        $country = oc_country::all();
        $zone = oc_zone::all();
        return Inertia::render('Admin/CreateCustomer',[
            'country' => $country,
            'zone' => $zone,
        ]);
    }

    public function store(Request $request){
        $data = $request->toArray();
        $customer = $data['customer'];
        $customer['password'] = Hash::make($customer['password']);
        $address = $data['address'];
        $id = oc_customer::store($customer,$address);

        return Redirect::route('admin.customer');
    }

    public function edit($id){
        $customer = oc_customer::with('getAddress','getStore')->where('customer_id', $id)->first();
        $country = oc_country::all();
        $zone = oc_zone::all();
        $history = oc_customer_history::where('customer_id',$id)->get();
        $transactions = oc_customer_transaction::where('customer_id',$id)->get();
        $rewards = oc_customer_reward::where('customer_id',$id)->get();
        $ips = oc_customer_ip::where('customer_id',$id)->get();
        $accounts = [];
        foreach($ips as $key=>$ip){
            $accounts[$key] = oc_customer_ip::where('ip', $ip->ip)->count();
        }

        return Inertia::render('Admin/EditCustomer',[
            'customer' => $customer,
            'country' => $country,
            'zone' => $zone,
            'history' => $history,
            'transactions' => $transactions,
            'rewards' => $rewards,
            'ips' => $ips,
            'accounts' => $accounts,
        ]);
    }
    
    public function update(Request $request){
        

        $Data = $request['customerData'];
        $pass = Hash::make($request['password']);
        $default = $request['defaultAddress'];
        $sql = oc_customer::editCustomer($Data,$pass,$default);

        return redirect()->back();

    }

    

    public function destroy(Request $request){
        oc_customer::whereIn('customer_id', $request)->delete();
        return redirect()->back();
    }
    public function addAddress(Request $request){
        $data = $request->toArray();
        $address = $data['formData'];
        $id = $data['id'];
        $sql = oc_customer::addAddress($address,$id);
        return redirect()->back();

    }
    public function deleteAddress($id){
        oc_address::find($id)->delete($id);
        return redirect()->back();
    }

    public function addHistory(Request $request){
        $data = $request->toArray();
        $sql = oc_customer_history::addHistory($data['id'],$data['form']);
        return redirect()->back();
    }

    public function deleteHistory($id){
        oc_customer_history::where('customer_history_id', $id)->delete();
        
        return redirect()->back();
    }

    public function addTransaction(Request $request){
        $data = $request->toArray();
        $sql = oc_customer_transaction::addTransaction($data['id'],$data['form']);
        return redirect()->back();
    }

    public function deleteTransaction($id){
        oc_customer_transaction::where('customer_transaction_id', $id)->delete();
        return redirect()->back();
    }

    public function addReward(Request $request){
        $data = $request->toArray();
        $sql = oc_customer_reward::addReward($data['id'],$data['form']);
        return redirect()->back();
    }
    public function deleteReward($id){
        oc_customer_reward::where('customer_reward_id', $id)->delete();
        return redirect()->back();
    }
    public function banIp($ip){
        oc_customer_ban_ip::insert($ip);
        return redirect()->back();
    }
}