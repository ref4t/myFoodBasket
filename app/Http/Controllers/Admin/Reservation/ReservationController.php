<?php

namespace App\Http\Controllers\Admin\Reservation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Carbon\Carbon;

use App\Models\oc_reservation;

class ReservationController extends Controller
{
    public function index(){

        $store = 'The Terra Pizza';
        $store_id = 78;

        $reservations = oc_reservation::where('store_id', $store_id)->orderBy('created_date','DESC')->paginate(30);

        return Inertia::render('Admin/Reservation/Reservation',[
            'reservations' => $reservations
        ]);
    }

    public function accept($id){

        $reservation = oc_reservation::find($id);
        $reservation->booking_status = 1;
        $reservation->save();
        return redirect()->back();
    }
    public function reject($id){

        $reservation = oc_reservation::find($id);
        $reservation->booking_status = 2;
        $reservation->save();
        return redirect()->back();
    }

    public function delete(Request $request){

        oc_reservation::whereIn('id', $request)->delete();
        return redirect()->back();
    }
}
