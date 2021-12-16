<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\oc_coupon;

class CouponController extends Controller
{
    public function index(){
        $store = 'The Terra Pizza';
        $store_id = 54;

        $coupons = oc_coupon::where('store_id',$store_id)->paginate(20);

        return Inertia::render('Admin/Coupon',[
            'coupons' => $coupons,
        ]);
    }

    public function create() {

        return Inertia::render('Admin/CreateCoupon');
    }
    public function store(Request $request) {
        $data = $request->toArray();

        $store = 'The Terra Pizza';
        $store_id = 54;

        $data = $data['form'];

        $data['date_start'] = strtok($data['date_start'], 'T');
        $data['date_end'] = strtok($data['date_end'], 'T');


        oc_coupon::addCoupon($data, $store_id);

        return redirect()->route('admin.offers.coupon.index');
    }
    public function edit($id) {

        $coupon = oc_coupon::where('coupon_id', $id)->first();

        return Inertia::render('Admin/EditCoupon',[
            'coupon' => $coupon
        ]);
    }
    public function update(Request $request) {

        $data = $request->toArray();

        $store = 'The Terra Pizza';
        $store_id = 54;

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
