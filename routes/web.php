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
        $theme = 2;
        if ($theme == 1){
            return Inertia::render('ShopPages/Hometheme1',['theme' => $theme]);
        }else
            return Inertia::render('ShopPages/Theme_2/Home',['theme' => $theme]);
    })->name('shopHome');

    Route::get('/member',function(){
        $theme = 2;
        if ($theme == 1){
            return Inertia::render('ShopPages/Membertheme1',['theme' => $theme]);
        }else
            return Inertia::render('ShopPages/Theme_2/Member',['theme' => $theme]);
    })->name('shopMember');

    Route::get('/menu',function(){
        $theme = 2;
        if ($theme == 1){
            return Inertia::render('ShopPages/Menutheme1',['theme' => $theme]);
        }else
            return Inertia::render('ShopPages/Theme_2/Menu',['theme' => $theme]);
    })->name('shopMenu');

    Route::get('/checkout',function(){
        $theme = 2;
        if ($theme == 1){
            return Inertia::render('ShopPages/Checkouttheme1',['theme' => $theme]);
        }else
            return Inertia::render('ShopPages/Theme_2/Checkout',['theme' => $theme]);
    })->name('shopcheckout');

    Route::get('/contactus',function(){
        $theme = 2;
        if ($theme == 1){
            return Inertia::render('ShopPages/Contactustheme1',['theme' => $theme]);
        }else
            return Inertia::render('ShopPages/Theme_2/Aboutus',['theme' => $theme]);
    })->name('shopcontactus');
    
    Route::get('/cart',function(){
        $theme = 2;
        if ($theme == 1){
            return Inertia::render('ShopPages/Cart',['theme' => $theme]);
        }else
            return Inertia::render('ShopPages/Theme_2/Cart',['theme' => $theme]);
    })->name('shopcart');

    
});

require __DIR__.'/auth.php';
