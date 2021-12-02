<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Shop\HomeController;
use App\Http\Controllers\Shop\MemberController;
use App\Http\Controllers\Shop\MenuController;
use App\Http\Controllers\Shop\CheckoutController;
use App\Http\Controllers\Shop\AboutusController;
use App\Http\Controllers\Shop\AccountController;
use App\Http\Controllers\Shop\ForgotPasswordController;
use App\Http\Controllers\Shop\RegistryController;
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
    Route::get('/home',[HomeController::class, 'index'])->name('shopHome');

    Route::get('/member',[MemberController::class, 'index'])->name('shopMember');

    Route::get('/menu',[MenuController::class, 'index'])->name('shopMenu');

    Route::get('/checkout',[CheckoutController::class, 'index'])->name('shopcheckout');

    Route::get('/contactus',[AboutusController::class, 'index'])->name('shopcontactus');
    
    Route::get('/cart',[CartController::class, 'index'])->name('shopcart');

    Route::get('/registration',[RegisterController::class, 'index'])->name('shopReg');

    Route::get('/account',[AccountController::class, 'index'])->name('shopAcc');
    
    // post
    Route::post('/account',[AccountController::class, 'index'])->name('shopAcc');

    Route::get('/forgotten',[ForgotPasswordController::class, 'index'])->name('shopForgot');

    // post
    Route::post('/forgotten',[ForgotPasswordController::class, 'index'])->name('shopForgot');
    
});

require __DIR__.'/auth.php';
