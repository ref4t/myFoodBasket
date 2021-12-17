<?php

namespace App\Http\Controllers\Admin\Offers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Carbon\Carbon;

use App\Models\oc_voucher;
use App\Models\oc_voucher_theme;
use App\Models\oc_voucher_history;

class VoucherController extends Controller
{
    public function index(){

        $store = 'The Terra Pizza';
        $store_id = 54;

        $vouchers = oc_voucher::where('store_id',$store_id)->paginate(20);

        return Inertia::render('Admin/Offers/Voucher/Voucher',[
            'vouchers' => $vouchers,
        ]);
        
    }
    public function create(){
        $theme = oc_voucher_theme::with('get_name')->get();
        return Inertia::render('Admin/Offers/Voucher/CreateVoucher',[
            'themeData' => $theme,
        ]);
    }
    public function store(Request $request){
        $store_id = 54;
        $data = $request->toArray();

        $voucherData = $data['voucher'];

        $voucher = new oc_voucher;

        $voucher->fill([
            'store_id' => 0,
            'on_off' => $voucherData['on_off'],
            'order_id' => 0,
            'store_id' => $store_id,
            'code' => $voucherData['code'],
            'from_name' => $voucherData['from_name'],
            'from_email' => $voucherData['from_email'],
            'to_name' => $voucherData['to_name'],
            'to_email' => $voucherData['to_email'],
            'voucher_theme_id' => $voucherData['voucher_theme_id'],
            'message' => $voucherData['message'],
            'amount' => $voucherData['amount'],
            'status' => $voucherData['status'],
            'date_added' => Carbon::now(),
            'apply_shipping' => $voucherData['apply_shipping'],

        ]);

        $voucher->save();

        return redirect()->route('admin.offers.voucher.index');
    }
    public function edit($id){
        $voucher = oc_voucher::where('voucher_id',$id)->first();
        $theme = oc_voucher_theme::with('get_name')->get();
        $history = oc_voucher_history::with('get_order')->where('voucher_id', $id)->paginate(50);
        return Inertia::render('Admin/Offers/Voucher/EditVoucher',[
            'voucher' => $voucher,
            'themeData' => $theme,
            'history' => $history,
        ]);

    }
    public function update(Request $request){

        $data = $request->toArray();
        $voucher = $data['voucher'];
        $voucher['date_added'] = Carbon::now();
        oc_voucher::where('voucher_id', $voucher['voucher_id'])->update( $voucher);

        return redirect()->route('admin.offers.voucher.index');

    }
    public function delete(Request $request){

        oc_voucher::whereIn('voucher_id', $request)->delete();
        return redirect()->back();
    }
}
