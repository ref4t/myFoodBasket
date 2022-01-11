<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;
use Auth;
use App\Models\oc_store;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    //protected $rootView = 'app';
    public function rootView(Request $request): string
    {
    //    dd(url()->current()) ;
        // dd($request->route()->getPrefix());
        $url = parse_url(url()->current());
        if ($request->route()->getPrefix() === '/admin' || isset($url['path']) == '/admin' ) {
            return 'admin.app';
        }
        elseif(url()->current() == env('APP_URL')){
            return 'main';
        }
        return 'app';
    }

    /**
     * Determine the current asset version.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request)
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request)
    {
        $data = Auth::guard()->user();
        // dd($data);
        if($data){
            if($data['user_group_id'] == 10){
                $request->session()->put('store_id', $data['user_shop']);
            }
        }
        return array_merge(parent::share($request), [
            
            'auth_customer'          => Auth::guard('customer')->user(),
            'auth'          => Auth::guard('admin')->user(),
            
            'stores'        => oc_store::orderby('name')->get(),
            'store_id'      => $request->session()->get('store_id'),
            'store_name'    => oc_store::select('name')->where('store_id', $request->session()->get('store_id'))->first(),
        ]);
    }
}
