<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use Carbon\Carbon;

use App\Models\oc_user;
use App\Models\oc_user_group;
use App\Models\oc_store;

class UserController extends Controller
{
    public function index(Request $request){

        $store_id =  $request->session()->get('store_id');

        
        if(!request('field') && !request('direction') ){
                
            $users = oc_user::where('user_shop', $store_id)->orderBy('date_added','DESC')->paginate(50);
            
        }
        

        if(request('field') && request('direction') ){
                
            $users = oc_user::where('user_shop', $store_id)->orderBy(request('field'), request('direction'))->paginate(50);
            
        }

        $groups = oc_user_group::all();
        
        return Inertia::render('Admin/Settings/User/User',[
            'users' => $users,
            'groups' => $groups,
            'filters' => request()->all(['field','direction']),
            
        ]);
    }
    public function create(){
    
        $groups = oc_user_group::all();
        $stores = oc_store::all();
        return Inertia::render('Admin/Settings/User/CreateUser',[
            'groups' => $groups,
            'stores' => $stores,
        ]);
    }
    public function store(Request $request){

        $user = new oc_user;

        $user->fill([
            'user_group_id' => $request['user_group_id'],
            'user_shop' => $request['user_shop'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
            'salt' => ' ',
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'email' => $request['email'],
            'code' => ' ',
            'ip' => ' ',
            'status' => $request['status'],
            'date_added' => Carbon::now(),
            'accessdirectory' => ' ',
        ]);

        $user->save();
    
        return redirect()->route('admin.settings.user.index');
    }
    public function edit($id){
        $user = oc_user::where('user_id',$id)->first();
        $groups = oc_user_group::all();
        $stores = oc_store::all();
    
        return Inertia::render('Admin/Settings/User/EditUser',[
            'user' => $user,
            'groups' => $groups,
            'stores' => $stores,
        ]);
    }

    public function update(Request $request){
        $data = [];
        if($request['password']){
            $data = $request['user'];

            $data['password'] = Hash::make($data['password']);

            oc_user::where('user_id', $data['user_id'])->update( $data);

        }else{
            oc_user::where('user_id', $data['user_id'])->update( $request->all());
        }
        
    
        return redirect()->route('admin.settings.user.index');
    }

    

    public function delete(Request $request){

        oc_user::whereIn('user_id', $request)->delete();
        return redirect()->back();
    }
}
