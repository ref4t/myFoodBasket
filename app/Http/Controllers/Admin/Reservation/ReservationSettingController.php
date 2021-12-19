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

        $validated = $request->validate([
            'settings.settings.store_id'	        => ['integer'],
            'settings.enable_reservation_module'	=> ['boolean'],
            'settings.temporary_disable'	        => ['string','max:255'],
            'settings.message_if_disable'	        => ['string','max:255'],
            'settings.max_people'	                => ['integer'],
            'settings.google_recapcha'	            => ['boolean'],
            'settings.header_message'	            => ['string','max:255'],
            'settings.header_description'	        => ['string','max:255'],
            'settings.header_background_options'	=> ['string','max:255'],
            'settings.header_background_image'	    => ['string','max:255','nullable'],
            'settings.header_background_color'	    => ['string','max:255','nullable'],
            'settings.footer_message'	            => ['string','max:255'],
            'settings.confirm_message'	            => ['string','max:255'],
            'settings.enable_opening_closing_time'	=> ['boolean'],
            'settings.opening_closing_time'         => ['string','max:255'],
        ]);

        
        
        $data = $request->toArray();
        $from = $data['from'];
        $to = $data['to'];
        $tempDisable['from'] = strtok($from, 'T');
        $tempDisable['to'] =  strtok($to, 'T');
        
        $tempDisable = serialize($tempDisable);
        $settings = $data['settings'];


        $settings['temporary_disable'] = $tempDisable;
        $settings['header_background_image'] = ' ';

        oc_reservations_setting::where('id', $settings['id'])->update( $settings);
        
        return redirect()->back();
    }
}
