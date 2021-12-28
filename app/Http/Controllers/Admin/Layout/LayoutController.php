<?php

namespace App\Http\Controllers\Admin\Layout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;


class LayoutController extends Controller
{
    public function index(Request $request){
        
        return Inertia::render('Admin/Layout/Layout',[

        ]);
    }
}
