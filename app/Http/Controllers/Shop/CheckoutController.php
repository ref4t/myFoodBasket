<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CheckoutController extends Controller
{
    public function index()
    {
        $theme = 2;
        if ($theme == 1){
            return Inertia::render('ShopPages/Theme_1/Checkout',['theme' => $theme]);
        }else
            return Inertia::render('ShopPages/Theme_2/Checkout',['theme' => $theme]);
    }
}
