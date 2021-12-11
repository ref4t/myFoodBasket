<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\Mainshop\ShopSearchController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\NewOrderController;

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
    return Inertia::render('Mainshop/Home');
})->name('Home');
Route::get('/search', [ShopSearchController::class, 'search'])->name('mainshopSearch');

// Route::get('/restaurants', function () {
//     return Inertia::render('Mainshop/restaurantList');
// });
Route::get('/restaurant/{id}',[ShopSearchController::class, 'singleShop'])->name('singleshop');
Route::get('/login');

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


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


Route::prefix('admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');

    Route::get('/orders', [OrderController::class, 'index'])->name('admin.dashboard.orders');
    Route::get('/orders/view/{id}',[OrderController::class, 'view'])->name('admin.dashboard.orders.show');
    Route::post('/orders/view/comment',[OrderController::class, 'comment'])->name('admin.orders.show.comment');
    Route::get('/orders/edit/{id}',[OrderController::class, 'edit'])->name('admin.dashboard.orders.edit');
    Route::post('/orders/edit/delete/{item}',[OrderController::class, 'delete'])->name('edit.product.delete');
    Route::post('/orders/edit/update/{order}',[OrderController::class, 'update'])->name('edit.order.update');

    Route::get('/transactions', [TransactionController::class, 'index'])->name('admin.dashboard.transactions');
    Route::get('/new-orders', [NewOrderController::class, 'index'])->name('admin.dashboard.newOrders');
});

require __DIR__.'/auth.php';
