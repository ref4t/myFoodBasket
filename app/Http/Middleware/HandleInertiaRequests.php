<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;

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
        if ($request->route()->getPrefix() === '/admin') {
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
        return array_merge(parent::share($request), [
            'auth' => [
                'user' => $request->user(),
            ],
            'stores' => oc_store::orderby('name')->get(),
            'store_id' => $request->session()->get('store_id'),
        ]);
    }
}
