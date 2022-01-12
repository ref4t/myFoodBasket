<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\oc_setting;
use App\Models\oc_store;
use App\Models\layout;
use App\Models\oc_order;
use App\Models\oc_customer;
use App\Models\oc_address;
use Carbon\Carbon;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {   
        $url = request()->root();
        $store_id =  $request->session()->get('store_id');
        if(!$store_id){

            $url = 'https://www.pizzacolichfield.co.uk/';
            $url =parse_url($url)['host'];
            $site = oc_store::where('url','like', '%'.$url.'%')->first();
        }
        else{
            $site = oc_store::where('store_id',$store_id)->first();
        }
        if(!$site){
            return abort(404);
        }
        $timeSetting=oc_setting::showtimeconfig($site->store_id); 
        $settings=oc_setting::where('store_id','=',$site->store_id)->where('group','=','config')->orWhere('group','=','deliverysetting')->get();
        $data['store_id']=$site->store_id;
                foreach ($settings as $result) {
                    if($result['key'] == 'config_logo' || $result['key'] == 'config_name' || $result['key'] == 'config_address' || $result['key'] == 'config_email' || $result['key'] == 'config_telephone' || $result['key'] == 'config_ssl' || $result['key'] == 'opening_time'){
                        if (!$result['serialized']) {
                            $data[$result['key']] = $result['value'];
                        } else {
                            $data[$result['key']] = unserialize($result['value']);
                        }
                    }
                }
        $cart=Cart::content();
        $total=Cart::total();
        $subtotal =Cart::subtotal();
        // $theme = 2;

        $layout = layout::with('get_slider','get_gallery','get_popular','get_category')->where('store_id', $store_id)->first();

        $theme = $layout['theme'];

        if($theme == 5){
            if($subtotal == 0){
                return Inertia::render('ShopPages/Theme_5/Cart',['theme' => $theme, 'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
               }
               else
                return Inertia::render('ShopPages/Theme_5/Checkout',['theme' => $theme, 'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
        }
        elseif($theme == 4){
            if($subtotal == 0){
                return Inertia::render('ShopPages/Theme_4/Cart',['theme' => $theme, 'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
               }
               else
                return Inertia::render('ShopPages/Theme_4/Checkout',['theme' => $theme, 'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
        }
        elseif($theme == 3){
            if($subtotal == 0){
                return Inertia::render('ShopPages/Theme_3/Cart',['theme' => $theme, 'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
               }
               else
                return Inertia::render('ShopPages/Theme_3/Checkout',['theme' => $theme, 'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
        }
        elseif($theme == 2){
            if($subtotal == 0){
                return Inertia::render('ShopPages/Theme_2/Cart',['theme' => $theme, 'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
               }
               else
                return Inertia::render('ShopPages/Theme_2/Checkout',['theme' => $theme, 'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
        }
        elseif($theme == 1){
            if($subtotal == 0){
                return Inertia::render('ShopPages/Theme_1/Cart',['theme' => $theme, 'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
               }
               else
                return Inertia::render('ShopPages/Theme_1/Checkout',['theme' => $theme, 'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
        }
        else{
            if($subtotal == 0){
                return Inertia::render('ShopPages/Theme_6/Cart',['theme' => $theme, 'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
               }
            else
                return Inertia::render('ShopPages/Theme_6/Checkout',['theme' => $theme, 'timeSetting'=>$timeSetting,'setting'=>$data,'cartItems'=>$cart,'cTotal'=>$total,'cSubtotal'=>$subtotal]);
           
        }
        
    }

    public function checkout(Request $request){

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('successTransaction'),
                "cancel_url" => route('cancelTransaction'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $request->cartTotal
                    ]
                ]
            ]
        ]);

        dump($response);

        if (isset($response['id']) && $response['id'] != null) {

            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }

            return redirect()
                ->route('createTransaction')
                ->with('error', 'Something went wrong.');

        } else {
            return redirect()
                ->route('createTransaction')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }

        dd($request->all());

        $store_id =$request->session()->get('store_id');
        $store = oc_store::where('store_id', $store_id)->first();
        
        $auth = $request['customer'];
        $guest = $request['guestForm'];
        $createData = $request['createData'];
        $delivery = $request['deliveryData'];
        $commition = oc_setting::where('store_id', $store_id)->where('key','myfoodbasketpayments_commision_rate')->first();
        
        if(isset($auth)){
            
            $order = new oc_order;

            $order->fill([
                'invoice_no'                => 0,
                'invoice_prefix'            => 0,
                'store_id'                  => $store['store_id'],
                'store_name'                => $store['name'],
                'store_url'                 => $store['url'],
                'customer_id'               => $auth['user_id'],
                'customer_group_id'         => $auth['user_group_id'],
                'firstname'                 => $auth['firstname'],
                'lastname'                  => $auth['lastname'],
                'email'                     => $auth['email'],
                'telephone'                 => 0,
                'fax'                       => 0,
                'payment_firstname'         => $auth['firstname'],
                'payment_lastname'          => $auth['lastname'],
                'payment_company'           => 0,
                'payment_company_id'        => 0,
                'payment_tax_id'            => 0,
                'payment_address_1'         => $delivery['line1'],
                'payment_address_2'         => $delivery['line2'],
                'payment_city'              => $delivery['city'],
                'payment_postcode'          => $delivery['post'],
                'payment_country'           => 0,
                'payment_country_id'        => 0,
                'payment_zone'              => 0,
                'payment_zone_id'           => 0,
                'payment_address_format'    => 0,
                'payment_method'            => $request['payment'],
                'payment_code'              => 'ccod',
                'shipping_firstname'        => $auth['firstname'],
                'shipping_lastname'         => $auth['lastname'],
                'shipping_company'          => 0,
                'shipping_address_1'        => $delivery['line1'],
                'shipping_address_2'        => $delivery['line2'],
                'shipping_city'             => $delivery['city'],
                'shipping_postcode'         => $delivery['post'],
                'shipping_country'          => 0,
                'shipping_country_id'       => 0,
                'shipping_zone'             => 0,
                'shipping_zone_id'          => 0,
                'shipping_address_format'   => 0,
                'shipping_method'           => $request['deliverymethod'],
                'comment'                   => $delivery['addtional'],
                'total'                     => $request['cartTotal'],
                'order_status_id'           => 2,
                'message'                   => $delivery['addtional'],
                'accepted_time'             => 'NULL' ,
                'affiliate_id'              => 0,
                'commission'                => $commition['value'],
                'language_id'               => 0,
                'currency_id'               => 0,
                'currency_code'             => 0,
                'currency_value'            => 0,
                'ip'                        => 0,
                'forwarded_ip'              => 0,
                'user_agent'                => 0,
                'accept_language'           => 0,
                'date_added'               => Carbon::now(),
                'date_modified'            => Carbon::now(),
                'flag_post_code'           => $request['deliverymethod'],
                'free_item'                => 0,
                'timedelivery'             => $request['deliverytime'],
                'gender_id'                => 0,
                'clear_history'            => 0,
            ]);
        $order->save();

        dd("done");

        }
        elseif(isset($createData)){
            
            $order = new oc_order;

            $order->fill([
                'invoice_no'                => 0,
                'invoice_prefix'            => 0,
                'store_id'                  => $store['store_id'],
                'store_name'                => $store['name'],
                'store_url'                 => $store['url'],
                'customer_id'               => $auth['user_id'],
                'customer_group_id'         => $auth['user_group_id'],
                'firstname'                 => $auth['firstname'],
                'lastname'                  => $auth['lastname'],
                'email'                     => $auth['email'],
                'telephone'                 => 0,
                'fax'                       => 0,
                'payment_firstname'         => $auth['firstname'],
                'payment_lastname'          => $auth['lastname'],
                'payment_company'           => 0,
                'payment_company_id'        => 0,
                'payment_tax_id'            => 0,
                'payment_address_1'         => $delivery['line1'],
                'payment_address_2'         => $delivery['line2'],
                'payment_city'              => $delivery['city'],
                'payment_postcode'          => $delivery['post'],
                'payment_country'           => 0,
                'payment_country_id'        => 0,
                'payment_zone'              => 0,
                'payment_zone_id'           => 0,
                'payment_address_format'    => 0,
                'payment_method'            => $request['payment'],
                'payment_code'              => 'ccod',
                'shipping_firstname'        => $auth['firstname'],
                'shipping_lastname'         => $auth['lastname'],
                'shipping_company'          => 0,
                'shipping_address_1'        => $delivery['line1'],
                'shipping_address_2'        => $delivery['line2'],
                'shipping_city'             => $delivery['city'],
                'shipping_postcode'         => $delivery['post'],
                'shipping_country'          => 0,
                'shipping_country_id'       => 0,
                'shipping_zone'             => 0,
                'shipping_zone_id'          => 0,
                'shipping_address_format'   => 0,
                'shipping_method'           => $request['deliverymethod'],
                'comment'                   => $delivery['addtional'],
                'total'                     => $request['cartTotal'],
                'order_status_id'           => 2,
                'message'                   => $delivery['addtional'],
                'accepted_time'             => 'NULL' ,
                'affiliate_id'              => 0,
                'commission'                => $commition['value'],
                'language_id'               => 0,
                'currency_id'               => 0,
                'currency_code'             => 0,
                'currency_value'            => 0,
                'ip'                        => 0,
                'forwarded_ip'              => 0,
                'user_agent'                => 0,
                'accept_language'           => 0,
                'date_added'               => Carbon::now(),
                'date_modified'            => Carbon::now(),
                'flag_post_code'           => $request['deliverymethod'],
                'free_item'                => 0,
                'timedelivery'             => $request['deliverytime'],
                'gender_id'                => 0,
                'clear_history'            => 0,
            ]);
        $order->save();

        dd("done");

        }
        
        else{
            $order = new oc_order;

            $order->fill([
                'invoice_no'                => 0,
                'invoice_prefix'            => 0,
                'store_id'                  => $store['store_id'],
                'store_name'                => $store['name'],
                'store_url'                 => $store['url'],
                'customer_id'               => 0,
                'customer_group_id'         => 0,
                'firstname'                 => $guest['firstName'],
                'lastname'                  => $guest['lastName'],
                'email'                     => $guest['email'],
                'telephone'                 => 0,
                'fax'                       => 0,
                'payment_firstname'         => $guest['firstName'],
                'payment_lastname'          => $guest['lastName'],
                'payment_company'           => 0,
                'payment_company_id'        => 0,
                'payment_tax_id'            => 0,
                'payment_address_1'         => $delivery['line1'],
                'payment_address_2'         => $delivery['line2'],
                'payment_city'              => $delivery['city'],
                'payment_postcode'          => $delivery['post'],
                'payment_country'           => 0,
                'payment_country_id'        => 0,
                'payment_zone'              => 0,
                'payment_zone_id'           => 0,
                'payment_address_format'    => 0,
                'payment_method'            => $request['payment'],
                'payment_code'              => 'ccod',
                'shipping_firstname'        => $guest['firstName'],
                'shipping_lastname'         => $guest['lastName'],
                'shipping_company'          => 0,
                'shipping_address_1'        => $delivery['line1'],
                'shipping_address_2'        => $delivery['line2'],
                'shipping_city'             => $delivery['city'],
                'shipping_postcode'         => $delivery['post'],
                'shipping_country'          => 0,
                'shipping_country_id'       => 0,
                'shipping_zone'             => 0,
                'shipping_zone_id'          => 0,
                'shipping_address_format'   => 0,
                'shipping_method'           => $request['deliverymethod'],
                'comment'                   => $delivery['addtional'],
                'total'                     => $request['cartTotal'],
                'order_status_id'           => 2,
                'message'                   => $delivery['addtional'],
                'accepted_time'             => 'NULL' ,
                'affiliate_id'              => 0,
                'commission'                => $commition['value'],
                'language_id'               => 0,
                'currency_id'               => 0,
                'currency_code'             => 0,
                'currency_value'            => 0,
                'ip'                        => 0,
                'forwarded_ip'              => 0,
                'user_agent'                => 0,
                'accept_language'           => 0,
                'date_added'               => Carbon::now(),
                'date_modified'            => Carbon::now(),
                'flag_post_code'           => $request['deliverymethod'],
                'free_item'                => 0,
                'timedelivery'             => $request['deliverytime'],
                'gender_id'                => 0,
                'clear_history'            => 0,
            ]);

            $order->save();
            dd("guest");
        }
        
    }

    /**
     * success transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function successTransaction(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);

        dump('successTransaction');
        dd($response);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            return redirect()
                ->route('createTransaction')
                ->with('success', 'Transaction complete.');
        } else {
            return redirect()
                ->route('createTransaction')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    /**
     * cancel transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function cancelTransaction(Request $request)
    {
        return redirect()
            ->route('createTransaction')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }
}
