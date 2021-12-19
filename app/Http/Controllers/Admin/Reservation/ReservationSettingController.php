<?php

namespace App\Http\Controllers\Admin\Reservation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Carbon\Carbon;

use App\Models\oc_reservations_setting;

class ReservationSettingController extends Controller
{
    public function index(){

        $store_id = 76;

        $settings = oc_reservations_setting::where('store_id', $store_id)->first();

        $tempDisable = unserialize($settings['temporary_disable']);
        $from = $tempDisable['from'];
        $to = $tempDisable['to'];
        return Inertia::render('Admin/Reservation/ReservationSetting',[
            'settings' => $settings,
            'from' => $from,
            'to' => $to
        ]);
    }
    public function update(Request $request){
        
        $data = $request->toArray();
        $from = $data['from'];
        $to = $data['to'];
        $from = strtok($from, 'T');
        $to =  strtok($to, 'T');
        $tempDisable['from']= $from;
        $tempDisable['to'] = $to;
        $tempDisable = serialize($tempDisable);
        $settings = $data['settings'];

        $settings['temporary_disable'] = $tempDisable;
        $settings['header_background_image'] = ' ';

        oc_reservations_setting::where('id', $settings['id'])->update( $settings);
        
        return redirect()->back();
    }
}
