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

use App\Http\Controllers\Admin\Reservation\ReservationController;
use App\Http\Controllers\Admin\Reservation\ReservationSettingController;

use App\Http\Controllers\Admin\Offers\LoyaltyController;
use App\Http\Controllers\Admin\Offers\CouponController;
use App\Http\Controllers\Admin\Offers\VoucherController;
use App\Http\Controllers\Admin\Offers\VoucherThemeController;
use App\Http\Controllers\Admin\Offers\FreeItemController;
use App\Http\Controllers\Admin\Offers\CartRuleController;

use App\Http\Controllers\Admin\Settings\MapAndCategoryController;
use App\Http\Controllers\Admin\Settings\OpenCloseController;

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
// $stores= oc_store::all();
// $urls=[];
// foreach ($stores as $key=>$domain) {
//         //   dd(parse_url($domain->url));9
//          $host=parse_url($domain->url);
//         if(isset($host['host']))
//         $urls[$key]=$host['host'];
//     }
// $string=implode('|',$urls);
// Route::pattern('domain', '('.$string.')');

$domain = array('domain' => parse_url(url()->current())['host']);

Route::group( $domain,function () {
    /* routes here */
    Route::get('/', [HomeController::class, 'index'])->name('shopHome');
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

Route::group(array('domain' => 'myfoodbasket.test'), function () {
    /* routes here */
    Route::get('/', [DomainController::class, 'index'])->name('Home');
    Route::get('/search', [ShopSearchController::class, 'search'])->name('mainshopSearch');
    Route::get('/restaurant/{id}',[ShopSearchController::class, 'singleShop'])->name('singleshop');
});
// $stores= oc_store::all();
// foreach ($stores as $domain) {
//     //   dd(parse_url($domain->url));9
//      $host=parse_url($domain->url);
//      if(isset($host['host'])){
//     $dom=$host['host'];
//     Route::group(array('domain' => $dom), $domainRoutes);
//     }
// }
Route::get('/login');


Route::prefix('admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/orders', [OrderController::class, 'index'])->name('admin.dashboard.orders.index');
    Route::get('/orders/view/{id}',[OrderController::class, 'view'])->name('admin.dashboard.orders.show');
    Route::post('/orders/view/comment',[OrderController::class, 'comment'])->name('admin.orders.show.comment');
    Route::get('/orders/edit/{id}',[OrderController::class, 'edit'])->name('admin.dashboard.orders.edit');
    Route::post('/orders/edit/delete/{item}',[OrderController::class, 'delete'])->name('edit.product.delete');
    Route::post('/orders/edit/update/{order}',[OrderController::class, 'update'])->name('edit.order.update');

    Route::get('/transactions', [TransactionController::class, 'index'])->name('admin.dashboard.transactions');
    Route::get('/new-orders', [NewOrderController::class, 'index'])->name('admin.dashboard.newOrders');
    Route::post('/new-orders', [NewOrderController::class, 'destroy'])->name('admin.newOrders.delete');


    Route::get('/customer',[CustomerController::class,'index'])->name('admin.customer.index');
    Route::get('/customer/create', [CustomerController::class, 'create'])->name('admin.customer.create');
    Route::post('/customer/create', [CustomerController::class, 'store'])->name('admin.customer.create');
    Route::get('/customer/edit/{id}',[CustomerController::class,'edit'])->name('admin.customer.edit');
    Route::post('/customer/delete', [CustomerController::class, 'destroy'])->name('admin.customer.delete');
    Route::post('/customer/update', [CustomerController::class, 'update'])->name('admin.customer.update');
    Route::post('/customer/addAddress', [CustomerController::class, 'addAddress'])->name('admin.customer.addAddress');
    Route::post('/customer/deleteAddress/{id}', [CustomerController::class, 'deleteAddress'])->name('admin.customer.deleteAddress');
    Route::post('/customer/addHistory', [CustomerController::class, 'addHistory'])->name('admin.customer.addHistory');
    Route::post('/customer/deleteHistory/{id}', [CustomerController::class, 'deleteHistory'])->name('admin.customer.deleteHistory');
    Route::post('/customer/addTransaction', [CustomerController::class, 'addTransaction'])->name('admin.customer.addTransaction');
    Route::post('/customer/deleteTransaction/{id}', [CustomerController::class, 'deleteTransaction'])->name('admin.customer.deleteTransaction');
    Route::post('/customer/addReward', [CustomerController::class, 'addReward'])->name('admin.customer.addReward');
    Route::post('/customer/deleteReward/{id}', [CustomerController::class, 'deleteReward'])->name('admin.customer.deleteReward');
    Route::post('/customer/banIp/{ip}', [CustomerController::class, 'banIp'])->name('admin.customer.banIp');

    Route::get('offers/loyalty',[LoyaltyController::class, 'index'])->name('admin.offers.loyalty.index');
    
    Route::get('offers/coupon',[CouponController::class, 'index'])->name('admin.offers.coupon.index');
    Route::get('offers/coupon/create',[CouponController::class, 'create'])->name('admin.offers.coupon.create');
    Route::post('offers/coupon/create',[CouponController::class, 'store'])->name('admin.offers.coupon.store');
    Route::post('offers/coupon/delete',[CouponController::class, 'delete'])->name('admin.offers.coupon.delete');
    Route::get('offers/coupon/edit/{id}',[CouponController::class, 'edit'])->name('admin.offers.coupon.edit');
    Route::post('offers/coupon/edit',[CouponController::class, 'update'])->name('admin.offers.coupon.update');

    Route::get('offers/voucher',[VoucherController::class, 'index'])->name('admin.offers.voucher.index');
    Route::get('offers/voucher/create',[VoucherController::class, 'create'])->name('admin.offers.voucher.create');
    Route::post('offers/voucher/store',[VoucherController::class, 'store'])->name('admin.offers.voucher.store');
    Route::get('offers/voucher/edit/{id}',[VoucherController::class, 'edit'])->name('admin.offers.voucher.edit');
    Route::post('offers/voucher/update',[VoucherController::class, 'update'])->name('admin.offers.voucher.update');
    Route::post('offers/voucher/delete',[VoucherController::class, 'delete'])->name('admin.offers.voucher.delete');

    Route::get('offers/voucher/theme',[VoucherThemeController::class, 'index'])->name('admin.offers.voucher.theme.index');
    Route::get('offers/voucher/theme/create',[VoucherThemeController::class, 'create'])->name('admin.offers.voucher.theme.create');
    Route::post('offers/voucher/theme/store',[VoucherThemeController::class, 'store'])->name('admin.offers.voucher.theme.store');
    Route::get('offers/voucher/theme/edit/{id}',[VoucherThemeController::class, 'edit'])->name('admin.offers.voucher.theme.edit');
    Route::post('offers/voucher/theme/update',[VoucherThemeController::class, 'update'])->name('admin.offers.voucher.theme.update');
    Route::post('offers/voucher/theme/delete',[VoucherThemeController::class, 'delete'])->name('admin.offers.voucher.theme.delete');

    Route::get('offers/free',[FreeItemController::class, 'index'])->name('admin.offers.free.item.index');
    Route::get('offers/free/create',[FreeItemController::class, 'create'])->name('admin.offers.free.item.create');
    Route::post('offers/free/store',[FreeItemController::class, 'store'])->name('admin.offers.free.item.store');
    Route::get('offers/free/edit/{id}',[FreeItemController::class, 'edit'])->name('admin.offers.free.item.edit');
    Route::post('offers/free/update',[FreeItemController::class, 'update'])->name('admin.offers.free.item.update');
    Route::post('offers/free/delete',[FreeItemController::class, 'delete'])->name('admin.offers.free.item.delete');

    Route::get('offers/free/rule',[CartRuleController::class, 'index'])->name('admin.offers.free.rule.index');
    Route::get('offers/free/rule/create',[CartRuleController::class, 'create'])->name('admin.offers.free.rule.create');
    Route::post('offers/free/rule/store',[CartRuleController::class, 'store'])->name('admin.offers.free.rule.store');
    Route::get('offers/free/rule/edit/{id}',[CartRuleController::class, 'edit'])->name('admin.offers.free.rule.edit');
    Route::post('offers/free/rule/update',[CartRuleController::class, 'update'])->name('admin.offers.free.rule.update');
    Route::post('offers/free/rule/delete',[CartRuleController::class, 'delete'])->name('admin.offers.free.rule.delete');

    Route::get('reservation/index', [ReservationController::class, 'index' ])->name('admin.reservation.index');
    Route::post('reservation/delete', [ReservationController::class, 'delete' ])->name('admin.reservation.delete');
    Route::post('reservation/accept/{id}', [ReservationController::class, 'accept' ])->name('admin.reservation.accept');
    Route::post('reservation/reject/{id}', [ReservationController::class, 'reject' ])->name('admin.reservation.reject');
    
    Route::get('reservation/setting/index', [ReservationSettingController::class, 'index' ])->name('admin.reservation.setting.index');
    Route::post('reservation/setting/update', [ReservationSettingController::class, 'update' ])->name('admin.reservation.setting.update');
    
    Route::get('settings/index', [MapAndCategoryController::class, 'index' ])->name('admin.settings.cat.index');
    Route::post('settings/update', [MapAndCategoryController::class, 'update' ])->name('admin.settings.cat.update');
   
    Route::get('settings/shop/index', [MapAndCategoryController::class, 'index' ])->name('admin.settings.shop.index');

    Route::get('settings/open-close/index',[OpenCloseController::class, 'index'])->name('admin.settings.openclose.index');
    Route::post('settings/open-close/update',[OpenCloseController::class, 'update'])->name('admin.settings.openclose.update');




    



});

require __DIR__.'/auth.php';
