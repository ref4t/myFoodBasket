<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\coordinates;


class CoordianteController extends Controller
{
    public function index(){
        dd(coordinates::first());
    }
}
