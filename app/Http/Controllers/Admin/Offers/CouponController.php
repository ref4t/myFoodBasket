<?php

namespace App\Http\Controllers\Admin\Offers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\oc_coupon;
use App\Models\oc_coupon_history;

class CouponController extends Controller
{
    public function index(Request $request){
        $store = 'The Terra Pizza';
        $store_id = $request->session()->get('store_id');

        $coupons = oc_coupon::where('store_id',$store_id)->paginate(20);

        return Inertia::render('Admin/Offers/Coupon/Coupon',[
            'coupons' => $coupons,
        ]);
    }

    public function create(Request $request) {

        return Inertia::render('Admin/Offers/Coupon/CreateCoupon');
    }
    public function store(Request $request) {
        $data = $request->toArray();

        $store = 'The Terra Pizza';
        $store_id = $request->session()->get('store_id');

        $data = $data['form'];

        $data['date_start'] = strtok($data['date_start'], 'T');
        $data['date_end'] = strtok($data['date_end'], 'T');


        oc_coupon::addCoupon($data, $store_id);

        return redirect()->route('admin.offers.coupon.index');
    }
    public function edit($id) {

        $coupon = oc_coupon::where('coupon_id', $id)->first();

        $history = oc_coupon_history::with('get_customer')->where('coupon_id', $id)->paginate(50);

        return Inertia::render('Admin/Offers/Coupon/EditCoupon',[
            'coupon' => $coupon,
            'history' => $history
        ]);
    }
    public function update(Request $request) {

        $data = $request->toArray();

        $store = 'The Terra Pizza';
        $store_id = $request->session()->get('store_id');

        $data = $data['coupon'];

        $data['date_start'] = strtok($data['date_start'], 'T');
        $data['date_end'] = strtok($data['date_end'], 'T');


        oc_coupon::updateCoupon($data, $store_id);

        return redirect()->route('admin.offers.coupon.index');
    }

    public function delete(Request $request) {

        oc_coupon::whereIn('coupon_id', $request)->delete();
        return redirect()->back();
    }
    
}
