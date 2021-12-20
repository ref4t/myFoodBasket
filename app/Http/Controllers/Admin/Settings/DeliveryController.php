<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Carbon\Carbon;

class DeliveryController extends Controller
{
    public function index(){

        return Inertia::render('Admin/Settings/Delivery',[
            
        ]);
    }
}
