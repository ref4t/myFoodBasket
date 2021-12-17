<?php

namespace App\Http\Controllers\Admin\Offers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LoyaltyController extends Controller
{
    public function index() {
        
        return Inertia::render('Admin/Offers/Loyalty/Loyalty');

    }
}
