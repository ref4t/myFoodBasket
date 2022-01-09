<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Mainshop\ShopSearchController;
use App\Http\Controllers\Home\DomainController;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\NewOrderController;
use App\Http\Controllers\Admin\CustomerController;

use App\Http\Controllers\Admin\Reservation\ReservationController;
use App\Http\Controllers\Admin\Reservation\ReservationSettingController;


use App\Http\Controllers\Admin\Catalog\CategoryController;
use App\Http\Controllers\Admin\Catalog\ProductController;


use App\Http\Controllers\Admin\Offers\LoyaltyController;
use App\Http\Controllers\Admin\Offers\CouponController;
use App\Http\Controllers\Admin\Offers\VoucherController;
use App\Http\Controllers\Admin\Offers\VoucherThemeController;
use App\Http\Controllers\Admin\Offers\FreeItemController;
use App\Http\Controllers\Admin\Offers\CartRuleController;


use App\Http\Controllers\Admin\Layout\LayoutController;
use App\Http\Controllers\Admin\Layout\LayoutSliderController;
use App\Http\Controllers\Admin\Layout\LayoutCategoryController;
use App\Http\Controllers\Admin\Layout\LayoutItemController;


use App\Http\Controllers\Admin\Gallery\GalleryController;

use App\Http\Controllers\Admin\Settings\MapAndCategoryController;
use App\Http\Controllers\Admin\Settings\ShopController;
use App\Http\Controllers\Admin\Settings\OpenCloseController;
use App\Http\Controllers\Admin\Settings\DeliveryController;
use App\Http\Controllers\Admin\Settings\PaymentController;
use App\Http\Controllers\Admin\Settings\SocialMediaController;
use App\Http\Controllers\Admin\Settings\ProductIconController;
use App\Http\Controllers\Admin\Settings\UserController;

use App\Http\Controllers\Shop\HomeController;
use App\Http\Controllers\Shop\MemberController;
use App\Http\Controllers\Shop\MenuController;
use App\Http\Controllers\Shop\CartController;
use App\Http\Controllers\Shop\CheckoutController;
use App\Http\Controllers\Shop\AboutusController;
use App\Http\Controllers\Shop\AccountController;
use App\Http\Controllers\Shop\ForgotPasswordController;
use App\Http\Controllers\Shop\RegistryController;
use App\Http\Controllers\Shop\CoordianteController;

use App\Models\oc_store;
use App\Models\layout;


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
// dd($mainDomain);
if($mainDomain['domain'] == parse_url(url()->current())['host']){
    Route::group( $mainDomain, function () {
        /* routes here */
        Route::get('/', [DomainController::class, 'index'])->name('Home');
        Route::get('/search', [ShopSearchController::class, 'search'])->name('mainshopSearch');
        Route::get('/restaurant/{id}',[ShopSearchController::class, 'singleShop'])->name('singleshop');
    });
}
else{
    $domain = array('domain' => parse_url(url()->current())['host']);

    Route::group( $domain,function () {
        /* routes here */
        Route::get('/', [HomeController::class, 'index'])->name('shopHome');
        Route::get('/member',[MemberController::class, 'index'])->name('shopMember');

        Route::get('/menu',[MenuController::class, 'index'])->name('shopMenu');
        
        Route::get('/checkout',[CheckoutController::class, 'index'])->name('shopcheckout');

        Route::get('/contactus',[AboutusController::class, 'index'])->name('shopcontactus');
        
        Route::get('/cart',[CartController::class, 'index'])->name('shopcart');

        Route::get('/coordinate',[CoordianteController::class, 'index'])->name('coordinate');

        Route::post('/addtocart',[CartController::class, 'addToCart'])->name('addtocart');
        
        Route::post('/removefromcart',[CartController::class, 'removeFromCart'])->name('removefromcart');

        // Route::get('/registration',[RegistryController::class, 'index'])->name('shopReg');

        Route::get('/account',[AccountController::class, 'index'])->name('shopAcc');
        
        // post
        Route::post('/account',[AccountController::class, 'index'])->name('shopAcc');

        Route::get('/forgotten',[ForgotPasswordController::class, 'index'])->name('shopForgot');

        // post
        Route::post('/forgotten',[ForgotPasswordController::class, 'index'])->name('shopForgot');
    });
}



// Route::get('/login');


Route::get('authcheck', function () {
    // dump(session()->all());
    dump('--- Admin ---');
    dump(Auth::guard('admin')->user());

    dump('--- Customer ---');
    dump(Auth::guard('customer')->user());
})->name('authcheck');


Route::get('/admin', [AuthenticatedSessionController::class, 'create'])->middleware('guest:admin')->name('login');
Route::post('/admin', [AuthenticatedSessionController::class, 'store']);
Route::get('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth:admin')->name('admin.logout');

Route::middleware('auth:admin')->prefix('admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    
    Route::post('/dashboard/store/{id}', function($id, Request $request){

        $request->session()->put('store_id', $id);
        return redirect()->back();
    })->name('dashboard.store_select');

    // Route::get('/fill-theme', function(){
    //     $stores = oc_store::select('store_id')->get();

    //     foreach($stores as $store){
    //         $layout = new layout();

            
    //         $layout->store_id         = $store['store_id'];
    //         $layout->theme            = 2;
    //         $layout->about_bg         = '#F8F9FA';
    //         $layout->about_content    = '#443F3F';
    //         $layout->booking_bg       = '#EDEDED';
    //         $layout->booking_content  = '#443F3F';
    //         $layout->gallery_bg       = '#F8F9FA';
    //         $layout->gallery_content  = '#443F3F';
    //         $layout->popular_bg       = '#000000';
    //         $layout->popular_content  = '#FFFFFF';
    //         $layout->category_bg      = '#EDEDED';
    //         $layout->category_content = '#443F3F';
    //         $layout->rating_bg        = '#D91D1D';
    //         $layout->rating_content   = '#FFFFFF';
    //         $layout->opening_bg       = '#EDEDED';
    //         $layout->opening_content  = '#443F3F';
            
    
    //         $layout->save();
    //     }
        
    //     dd("success");
    // });

    // orders
    Route::get('/orders', [OrderController::class, 'index'])->name('admin.dashboard.orders.index');
    Route::get('/orders/view/{id}',[OrderController::class, 'view'])->name('admin.dashboard.orders.show');
    Route::post('/orders/view/comment',[OrderController::class, 'comment'])->name('admin.orders.show.comment');
    Route::get('/orders/edit/{id}',[OrderController::class, 'edit'])->name('admin.dashboard.orders.edit');
    Route::post('/orders/edit/delete/{item}',[OrderController::class, 'delete'])->name('edit.product.delete');
    Route::post('/orders/edit/update/{order}',[OrderController::class, 'update'])->name('edit.order.update');

    Route::get('/transactions', [TransactionController::class, 'index'])->name('admin.dashboard.transactions');
    Route::get('/new-orders', [NewOrderController::class, 'index'])->name('admin.dashboard.newOrders');
    Route::post('/new-orders', [NewOrderController::class, 'destroy'])->name('admin.newOrders.delete');

    // reservations
    Route::get('reservation/index', [ReservationController::class, 'index' ])->name('admin.reservation.index');
    Route::post('reservation/delete', [ReservationController::class, 'delete' ])->name('admin.reservation.delete');
    Route::post('reservation/accept/{id}', [ReservationController::class, 'accept' ])->name('admin.reservation.accept');
    Route::post('reservation/reject/{id}', [ReservationController::class, 'reject' ])->name('admin.reservation.reject');
    
    Route::get('reservation/setting/index', [ReservationSettingController::class, 'index' ])->name('admin.reservation.setting.index');
    Route::post('reservation/setting/update', [ReservationSettingController::class, 'update' ])->name('admin.reservation.setting.update');


    // catalog
    Route::get('catalog/category/index', [CategoryController::class, 'index' ])->name('admin.catalog.category.index');
    Route::get('catalog/category/create', [CategoryController::class, 'create' ])->name('admin.catalog.category.create');
    Route::post('catalog/category/store', [CategoryController::class, 'store' ])->name('admin.catalog.category.store');
    Route::post('catalog/category/delete', [CategoryController::class, 'delete' ])->name('admin.catalog.category.delete');
    Route::get('catalog/category/edit/{id}', [CategoryController::class, 'edit' ])->name('admin.catalog.category.edit');
    Route::post('catalog/category/update', [CategoryController::class, 'update' ])->name('admin.catalog.category.update');
    Route::post('catalog/category/size/store', [CategoryController::class, 'sizeStore' ])->name('admin.catalog.category.size.store');
    Route::post('catalog/category/size/update', [CategoryController::class, 'sizeUpdate' ])->name('admin.catalog.category.size.update');
    Route::post('catalog/category/size/delete/{id}', [CategoryController::class, 'sizeDelete' ])->name('admin.catalog.category.size.delete');
    Route::post('catalog/category/options/delete', [CategoryController::class, 'optionDelete' ])->name('admin.catalog.category.options.delete');
    Route::post('catalog/category/options/store', [CategoryController::class, 'optionStore' ])->name('admin.catalog.category.options.store');


    Route::get('catalog/product/index',[ProductController::class, 'index'])->name('admin.catalog.product.index');
    Route::get('catalog/product/create',[ProductController::class, 'create'])->name('admin.catalog.product.create');
    Route::post('catalog/product/store',[ProductController::class, 'store'])->name('admin.catalog.product.store');
    Route::get('catalog/product/edit/{id}',[ProductController::class, 'edit'])->name('admin.catalog.product.edit');
    Route::post('catalog/product/update',[ProductController::class, 'update'])->name('admin.catalog.product.update');
    Route::post('catalog/product/delete',[ProductController::class, 'delete'])->name('admin.catalog.product.delete');

    // offers
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


    // Gallery

    Route::get('gellary/index',[GalleryController::class, 'index'])->name('admin.gallery.index');
    Route::post('gellary/insert',[GalleryController::class, 'insert'])->name('admin.gallery.insert');
    Route::post('gellary/delete/{id}',[GalleryController::class, 'delete'])->name('admin.gallery.delete');
    Route::post('gellary/slider/insert',[GalleryController::class, 'insertSlider'])->name('admin.gallery.slider.insert');
    Route::post('gellary/slider/delete/{id}',[GalleryController::class, 'deleteSlider'])->name('admin.gallery.slider.delete');
    Route::post('gellary/popular/insert',[GalleryController::class, 'insertPopular'])->name('admin.gallery.popular.insert');
    Route::post('gellary/popular/delete/{id}',[GalleryController::class, 'deletePopular'])->name('admin.gallery.popular.delete');
    Route::post('gellary/category/insert',[GalleryController::class, 'insertCategory'])->name('admin.gallery.category.insert');
    Route::post('gellary/category/delete/{id}',[GalleryController::class, 'deleteCategory'])->name('admin.gallery.category.delete');


    // customers
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

    // layout
    Route::get('/layout',[LayoutController::class,'index'])->name('admin.layout.layout.index');
    Route::post('/layout/update',[LayoutController::class,'update'])->name('admin.layout.layout.update');
    Route::post('/layout/slider',[LayoutController::class,'slider'])->name('admin.layout.layout.slider');
    Route::post('/layout/slider/delete/{id}',[LayoutController::class,'delete'])->name('admin.layout.layout.slider.delete');


    Route::get('/layout/slider',[LayoutSliderController::class,'index'])->name('admin.layout.slider.index');
    Route::post('/layout/slider/insert',[LayoutSliderController::class,'insert'])->name('admin.layout.slider.insert');
    Route::post('/layout/slider/delete/{id}',[LayoutSliderController::class,'delete'])->name('admin.layout.slider.delete');


    Route::get('/layout/category',[LayoutCategoryController::class,'index'])->name('admin.layout.category.index');
    Route::post('/layout/category/insert',[LayoutCategoryController::class,'insert'])->name('admin.layout.category.insert');
    Route::post('/layout/category/delete/{id}',[LayoutCategoryController::class,'delete'])->name('admin.layout.category.delete');
    

    Route::get('/layout/item',[LayoutItemController::class,'index'])->name('admin.layout.item.index');
    Route::post('/layout/item/insert',[LayoutItemController::class,'insert'])->name('admin.layout.item.insert');
    Route::post('/layout/item/delete/{id}',[LayoutItemController::class,'delete'])->name('admin.layout.item.delete');

    
    // settings
    Route::get('settings/index', [MapAndCategoryController::class, 'index' ])->name('admin.settings.cat.index');
    Route::post('settings/update', [MapAndCategoryController::class, 'update' ])->name('admin.settings.cat.update');

    Route::get('settings/shop/index', [MapAndCategoryController::class, 'index' ])->name('admin.settings.shop.index');


    Route::get('settings/shop/list', [ShopController::class, 'index' ])->name('admin.settings.shop.list');
    Route::post('settings/shop/list/delete', [ShopController::class, 'delete' ])->name('admin.settings.shop.delete');

    Route::get('settings/shop/create', [ShopController::class, 'create' ])->name('admin.settings.shop.create');
    Route::post('settings/shop/store', [ShopController::class, 'store' ])->name('admin.settings.shop.store');
    
    Route::get('settings/shop/edit/{id}', [ShopController::class, 'edit' ])->name('admin.settings.shop.edit');

    Route::get('settings/open-close/index',[OpenCloseController::class, 'index'])->name('admin.settings.openclose.index');
    Route::post('settings/open-close/update',[OpenCloseController::class, 'update'])->name('admin.settings.openclose.update');

    Route::get('settings/delivery/index',[DeliveryController::class, 'index'])->name('admin.settings.delivery.index');
    Route::post('settings/delivery/delete',[DeliveryController::class, 'delete'])->name('admin.settings.delivery.delete');
    Route::post('settings/delivery/addPostGroup',[DeliveryController::class, 'addPostGroup'])->name('admin.settings.delivery.addPostGroup');
    Route::post('settings/delivery/addDistGroup',[DeliveryController::class, 'addDistGroup'])->name('admin.settings.delivery.addDistGroup');
    Route::post('settings/delivery/addAreaGroup',[DeliveryController::class, 'addAreaGroup'])->name('admin.settings.delivery.addAreaGroup');
    Route::post('settings/delivery/update',[DeliveryController::class, 'update'])->name('admin.settings.delivery.update');


    Route::get('settings/payment/index',[PaymentController::class, 'index'])->name('admin.settings.payment.index');
    Route::get('settings/payment/update',[PaymentController::class, 'update'])->name('admin.settings.payment.update');
    Route::get('settings/payment/myfb',[PaymentController::class, 'myfb'])->name('admin.settings.payment.myfb');
    Route::post('settings/payment/myfb/update',[PaymentController::class, 'myfbUpdate'])->name('admin.settings.payment.myfb.update');
    Route::get('settings/payment/cash',[PaymentController::class, 'cash'])->name('admin.settings.payment.cash');
    Route::post('settings/payment/cash/update',[PaymentController::class, 'cashUpdate'])->name('admin.settings.payment.cash.update');

    Route::get('settings/payment/payment',[PaymentController::class, 'payment'])->name('admin.settings.payment.payment');
    Route::post('settings/payment/payment/update',[PaymentController::class, 'paymentUpdate'])->name('admin.settings.payment.payment.update');
    
    Route::get('settings/payment/paypal',[PaymentController::class, 'paypal'])->name('admin.settings.payment.paypal');
    Route::post('settings/payment/paypal/update',[PaymentController::class, 'paypalUpdate'])->name('admin.settings.payment.paypal.update');
   
    Route::get('settings/payment/worldpay',[PaymentController::class, 'worldpay'])->name('admin.settings.payment.worldpay');
    Route::post('settings/payment/worldpay/update',[PaymentController::class, 'worldpayUpdate'])->name('admin.settings.payment.worldpay.update');
    
    Route::get('settings/payment/takePayment',[PaymentController::class, 'takePayment'])->name('admin.settings.payment.takePayment');
    Route::post('settings/payment/takePayment/update',[PaymentController::class, 'takePaymentUpdate'])->name('admin.settings.payment.takePayment.update');


    Route::get('settings/social-media/index',[SocialMediaController::class, 'index'])->name('admin.settings.social.index');
    Route::post('settings/social-media/update',[SocialMediaController::class, 'update'])->name('admin.settings.social.update');

    Route::get('settings/product-icon/index',[ProductIconController::class, 'index'])->name('admin.settings.product_icon.index');
    Route::get('settings/product-icon/create',[ProductIconController::class, 'create'])->name('admin.settings.product_icon.create');
    Route::post('settings/product-icon/store',[ProductIconController::class, 'store'])->name('admin.settings.product_icon.store');
    Route::get('settings/product-icon/edit/{id}',[ProductIconController::class, 'edit'])->name('admin.settings.product_icon.edit');
    Route::post('settings/product-icon/update',[ProductIconController::class, 'update'])->name('admin.settings.product_icon.update');
    Route::post('settings/product-icon/delete',[ProductIconController::class, 'delete'])->name('admin.settings.product_icon.delete');

    Route::get('settings/user/index',[UserController::class, 'index'])->name('admin.settings.user.index');
    Route::get('settings/user/create',[UserController::class, 'create'])->name('admin.settings.user.create');
    Route::post('settings/user/store',[UserController::class, 'store'])->name('admin.settings.user.store');
    Route::get('settings/user/edit/{id}',[UserController::class, 'edit'])->name('admin.settings.user.edit');
    Route::post('settings/user/update',[UserController::class, 'update'])->name('admin.settings.user.update');
    Route::post('settings/user/delete',[UserController::class, 'delete'])->name('admin.settings.user.delete');
});

// require __DIR__.'/auth.php';
require __DIR__.'/authCustomer.php';
