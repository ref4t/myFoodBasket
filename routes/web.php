<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::prefix('shop')->group(function(){
    Route::get('/home',function(){
        $openBanner = true;
        return Inertia::render('ShopPages/ShopFront',['openBanner' => $openBanner]);
    })->name('shopHome');

    Route::get('/member',function(){
        $openBanner = true;
        return Inertia::render('ShopPages/Member',['openBanner' => $openBanner]);
    })->name('shopMember');

    Route::get('/menu',function(){
        $openBanner = true;
        return Inertia::render('ShopPages/Menu',['openBanner' => $openBanner]);
    })->name('shopmenu');

    Route::get('/checkout',function(){
        $openBanner = true;
        return Inertia::render('ShopPages/Checkout',['openBanner' => $openBanner]);
    })->name('shopcheckout');

    Route::get('/contactus',function(){
        $openBanner = true;
        return Inertia::render('ShopPages/Contactus',['openBanner' => $openBanner]);
    })->name('shopcontactus');
    Route::get('/cart',function(){
        $openBanner = true;
        return Inertia::render('ShopPages/Cart',['openBanner' => $openBanner]);
    })->name('shopcart');
});

require __DIR__.'/auth.php';
