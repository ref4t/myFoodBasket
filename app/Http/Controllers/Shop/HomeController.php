<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\oc_store;
use App\Models\oc_store_review;
use App\Models\oc_slider;
use App\Models\oc_gender;
use App\Models\oc_ybc_openclosttime;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        //$request->root();
        $url = 'https://www.stationkebabs.co.uk/';
        
        $site = oc_store::where('ssl', $url)->first();

        $reviews = oc_store_review::where('store_id', $site->store_id)->limit(5)->get();
        
        $slider = oc_slider::where('store_id', $site->store_id);
        
        $gender = oc_gender::all();

        $theme = 2;
        if ($theme == 1){
            return Inertia::render('ShopPages/Theme_1/Home',[
                'theme' => $theme, 
                'reviews' => $reviews,
                'slider' => $slider,
                'gender' => $gender
            ]);
        }else
            return Inertia::render('ShopPages/Theme_2/Home',[
                'theme' => $theme, 
                'reviews' => $reviews,
                'slider' => $slider,
                'gender' => $gender
            ]);
    }
}
