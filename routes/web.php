<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;

use App\Http\Controllers\Mainshop\ShopSearchController;
use App\Http\Controllers\Home\DomainController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\NewOrderController;
use App\Http\Controllers\Admin\CustomerController;

use App\Http\Controllers\Shop\HomeController;
use App\Http\Controllers\Shop\MemberController;
use App\Http\Controllers\Shop\MenuController;
use App\Http\Controllers\Shop\CartController;
use App\Http\Controllers\Shop\CheckoutController;
use App\Http\Controllers\Shop\AboutusController;
use App\Http\Controllers\Shop\AccountController;
use App\Http\Controllers\Shop\ForgotPasswordController;
use App\Http\Controllers\Shop\RegistryController;

use App\Models\oc_store;


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
$mainDomain = array('domain' => parse_url(env('APP_URL'))['host']);
Route::group( $mainDomain, function () {
    /* routes here */
    Route::get('/', [DomainController::class, 'index'])->name('Home');
    Route::get('/search', [ShopSearchController::class, 'search'])->name('mainshopSearch');
    Route::get('/restaurant/{id}',[ShopSearchController::class, 'singleShop'])->name('singleshop');
});
$domain = array('domain' => parse_url(url()->current())['host']);

Route::group( $domain,function () {
    /* routes here */
    Route::get('/', [HomeController::class, 'index'])->name('shopHome');
    Route::get('/member',[MemberController::class, 'index'])->name('shopMember');

    Route::get('/menu',[MenuController::class, 'index'])->name('shopMenu');
    
    Route::get('/checkout',[CheckoutController::class, 'index'])->name('shopcheckout');

    Route::get('/contactus',[AboutusController::class, 'index'])->name('shopcontactus');
    
    Route::get('/cart',[CartController::class, 'index'])->name('shopcart');

    Route::post('/addtocart',[CartController::class, 'addToCart'])->name('addtocart');

    Route::get('/registration',[RegisterController::class, 'index'])->name('shopReg');

    Route::get('/account',[AccountController::class, 'index'])->name('shopAcc');
    
    // post
    Route::post('/account',[AccountController::class, 'index'])->name('shopAcc');

    Route::get('/forgotten',[ForgotPasswordController::class, 'index'])->name('shopForgot');

    // post
    Route::post('/forgotten',[ForgotPasswordController::class, 'index'])->name('shopForgot');
});



Route::get('/login');


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
    Route::post('/new-orders', [NewOrderController::class, 'destroy'])->name('admin.newOrders.delete');


    Route::get('/user',[CustomerController::class,'index'])->name('admin.customer');
    Route::get('/user/edit/{id}',[CustomerController::class,'edit'])->name('admin.customer.edit');
    Route::post('/new-orders', [CustomerController::class, 'destroy'])->name('admin.customer.delete');
});

require __DIR__.'/auth.php';
