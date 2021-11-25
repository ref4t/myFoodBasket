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
            return Inertia::render('ShopPages/Theme_1/Home',['theme' => $theme]);
        }else
            return Inertia::render('ShopPages/Theme_2/Home',['theme' => $theme]);
    })->name('shopHome');

    Route::get('/member',function(){
        $theme = 2;
        if ($theme == 1){
            return Inertia::render('ShopPages/Theme_1/Member',['theme' => $theme]);
        }else
            return Inertia::render('ShopPages/Theme_2/Member',['theme' => $theme]);
    })->name('shopMember');

    Route::get('/menu',function(){
        $theme = 2;
        if ($theme == 1){
            return Inertia::render('ShopPages/Theme_1/Menu',['theme' => $theme]);
        }else
            return Inertia::render('ShopPages/Theme_2/Menu',['theme' => $theme]);
    })->name('shopMenu');

    Route::get('/checkout',function(){
        $theme = 2;
        if ($theme == 1){
           return Inertia::render('ShopPages/Theme_1/Checkout',['theme' => $theme]);
        }else{
            
            return Inertia::render('ShopPages/Theme_2/Checkout',['theme' => $theme]);
        }
            
    })->name('shopcheckout');

    Route::get('/contactus',function(){
        $theme = 2;
        if ($theme == 1){
            return Inertia::render('ShopPages/Theme_1/Aboutus',['theme' => $theme]);
        }else
            return Inertia::render('ShopPages/Theme_2/Aboutus',['theme' => $theme]);
    })->name('shopcontactus');
    
    Route::get('/cart',function(){
        $theme = 2;
        if ($theme == 1){
            return Inertia::render('ShopPages/Theme_1/Cart',['theme' => $theme]);
        }else
            return Inertia::render('ShopPages/Theme_2/Cart',['theme' => $theme]);
    })->name('shopcart');

    Route::get('/registration',function(){
        $theme = 2;
        if ($theme == 1){
            return Inertia::render('ShopPages/Theme_1/Registration',['theme' => $theme]);
        }else
            return Inertia::render('ShopPages/Theme_2/Registration',['theme' => $theme]);
    })->name('shopReg');

    Route::get('/account',function(){
        $theme = 2;
        if ($theme == 1){
            return Inertia::render('ShopPages/Theme_1/Account',['theme' => $theme]);
        }else
            return Inertia::render('ShopPages/Theme_2/Account',['theme' => $theme]);
    })->name('shopAcc');
    
    Route::post('/account',function(){
        $theme = 2;
        if ($theme == 1){
            return Inertia::render('ShopPages/Theme_1/Account',['theme' => $theme]);
        }else
            return Inertia::render('ShopPages/Theme_2/Account',['theme' => $theme]);
    })->name('shopAcc');

    Route::get('/forgotten',function(){
        $theme = 2;
        if ($theme == 1){
            return Inertia::render('ShopPages/Theme_1/Forgotpass',['theme' => $theme]);
        }else
            return Inertia::render('ShopPages/Theme_2/Forgotpass',['theme' => $theme]);
    })->name('shopForgot');

    Route::post('/forgotten',function(){
        $theme = 2;
        if ($theme == 1){
            return Inertia::render('ShopPages/Theme_1/Forgotpass',['theme' => $theme]);
        }else
            return Inertia::render('ShopPages/Theme_2/Forgotpass',['theme' => $theme]);
    })->name('shopForgot');

    
});

require __DIR__.'/auth.php';
