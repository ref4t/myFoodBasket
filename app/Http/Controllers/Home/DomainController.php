<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;


class DomainController extends Controller
{
    public function index(){
        // $domain = parse_url(request()->root())['host'];
        
        return Inertia::render('Mainshop/Home');

    }
}
