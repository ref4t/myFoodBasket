<?php

namespace App\Http\Controllers\Admin\Offers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Carbon\Carbon;

use App\Models\oc_voucher;
use App\Models\oc_voucher_theme;
use App\Models\oc_voucher_history;

class VoucherThemeController extends Controller
{
    public function index(){

        $store = 'The Terra Pizza';
        $store_id = 54;

        $themes = oc_voucher_theme::with('get_name')->paginate(20);

        return Inertia::render('Admin/Offers/Voucher/VoucherTheme',[
            'themes' => $themes
        ]);
        
    }
    public function create(){


        return Inertia::render('Admin/Offers/Voucher/CreateVoucherTheme',[
        ]);
    }
    public function store(Request $request){
      
        $data = $request->toArray();

        return redirect()->route('admin.offers.voucher.theme.index');
    }
    public function edit($id){

        $theme = oc_voucher_theme::with('get_name')->where('voucher_theme_id', $id)->first();

        return Inertia::render('Admin/Offers/Voucher/EditVoucherTheme',[
            'theme' =>  $theme,
        ]);

    }
    public function update(Request $request){

        $data = $request->toArray();

        return redirect()->route('admin.offers.voucher.theme.index');

    }
    public function delete(Request $request){

        oc_voucher_theme::whereIn('voucher_theme_id', $request)->delete();
        return redirect()->back();
    }
}
