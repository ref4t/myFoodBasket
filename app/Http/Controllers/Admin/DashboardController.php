<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Auth;

class DashboardController extends Controller
{
    public function index() {
        
        //  dd(Auth::guard('admin'));
        return Inertia::render('Admin/Dashboard');
    }
}
