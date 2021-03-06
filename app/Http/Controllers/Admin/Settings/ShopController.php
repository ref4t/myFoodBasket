<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Carbon\Carbon;
use Redirect;
use DB;
use Auth;

use App\Models\oc_store;
use App\Models\oc_setting;
use App\Models\oc_country;
use App\Models\oc_zone;
use App\Models\oc_language;
use App\Models\oc_currency;
use App\Models\layout;

class ShopController extends Controller
{
    public function index(Request $request){

        $data = Auth::guard()->user();

        if($data['user_group_id'] == 10){
            return redirect()->route('admin.dashboard');
        }
        // $store_id =$request->session()->get('store_id');

        $stores = oc_store::paginate(20);

        // dd($stores);

        return Inertia::render('Admin/Settings/Shop/List',[
            'storesData' => $stores,
        ]);
    }

    public function create(){

        $data = Auth::guard()->user();

        if($data['user_group_id'] == 10){
            return redirect()->route('admin.dashboard');
        }

        $country = oc_country::all();
        $zone = oc_zone::all();
        $languages = oc_language::all();
        $currency = oc_currency::all();


        return Inertia::render('Admin/Settings/Shop/Create',[
            'country' => $country,
            'zone' => $zone ,
            'language' => $languages ,
            'currency' => $currency ,
        ]);

    }

    public function store(Request $request){

        $data = Auth::guard()->user();

        if($data['user_group_id'] == 10){
            return redirect()->route('admin.dashboard');
        }

        $data = $request['data'];

        $image = $request['image'];

        

        // dd($data, $image);

        

        $store_path = '';
        if (strcasecmp($data['config_name'][0],'a') == 0 || strcasecmp($data['config_name'][0],'b') == 0 ){
           $store_path = 'A-B';
        }elseif(strcasecmp($data['config_name'][0],'c') == 0 || strcasecmp($data['config_name'][0],'d') == 0 ){
            $store_path = 'C-D';
        }elseif(strcasecmp($data['config_name'][0],'e') == 0 || strcasecmp($data['config_name'][0],'f') == 0 ){
            $store_path = 'E-F';
        }elseif(strcasecmp($data['config_name'][0],'g') == 0 || strcasecmp($data['config_name'][0],'h') == 0 ){
            $store_path = 'G-H';
        }elseif(strcasecmp($data['config_name'][0],'i') == 0 || strcasecmp($data['config_name'][0],'j') == 0 ){
            $store_path = 'I-J';
        }elseif(strcasecmp($data['config_name'][0],'k') == 0 || strcasecmp($data['config_name'][0],'l') == 0 ){
            $store_path = 'K-L';
        }elseif(strcasecmp($data['config_name'][0],'m') == 0 || strcasecmp($data['config_name'][0],'n') == 0 ){
            $store_path = 'M-N';
        }elseif(strcasecmp($data['config_name'][0],'o') == 0 || strcasecmp($data['config_name'][0],'p') == 0 ){
            $store_path = 'O-P';
        }elseif(strcasecmp($data['config_name'][0],'q') == 0 || strcasecmp($data['config_name'][0],'r') == 0 ){
            $store_path = 'Q-R';
        }elseif(strcasecmp($data['config_name'][0],'s') == 0 || strcasecmp($data['config_name'][0],'t') == 0 ){
            $store_path = 'S-T';
        }elseif(strcasecmp($data['config_name'][0],'u') == 0 || strcasecmp($data['config_name'][0],'v') == 0 ){
            $store_path = 'U-V';
        }elseif(strcasecmp($data['config_name'][0],'w') == 0 || strcasecmp($data['config_name'][0],'x') == 0 ){
            $store_path = 'W-X';
        }elseif(strcasecmp($data['config_name'][0],'y') == 0 || strcasecmp($data['config_name'][0],'z') == 0 ){
            $store_path = 'Y-Z';
        }

        $store_name = wordwrap(strtolower($data['config_name']), 1, '-', 0);
        $store_path .= '/' ;
        $store_path  .= $store_name;
        // dd($store_path);
        // $store;

        // dd($request->all());

        

        $image_path = '';
        if( $data['config_logo'] != null){
       
            $image = $data['config_logo'];
            $image_name = wordwrap(strtolower($image->getClientOriginalName()), 1, '_', 0) ;
            $image->move(public_path('/image/data/shop-files/'.$store_path),$image_name);
            $data['config_logo'] = "/image/data/shop-files/".$store_path . $image_name;
        }


        if( $data['config_icon'] != null){
       
            $image = $data['config_icon'];
            $image_name = wordwrap(strtolower($image->getClientOriginalName()), 1, '_', 0) ;
            $image->move(public_path('/image/data/shop-files/'.$store_path),$image_name);
             $data['config_icon'] = "/image/data/shop-files/".$store_path . $image_name;
        }

        
        

        $store = new oc_store;

        $store->fill([
            'name'            => $data['config_name'],
            'url'             => $data['config_url'],
            'ssl'             => $data['config_ssl'],
            'id_cat_default'  => 0,
            'date_create'     => Carbon::now(),
        ]);

        $store->save();

        // dd($store);

        $setting = [];

        $index = 0;


        $data['curren_store_id'] = $store->id;
        foreach ($data as $key => $value) {

            
            $option = new oc_setting();
            $option->store_id = $store->id;
            $option->group = 'config';
            $option->key = $key;
            $option->value = $value;
            $option->serialized = 0;

            $option->save();
        }

        $default['enable_delivery'] = 'both';
        $default['delivery_option'] = 'post_codes';
        $default['is_distance_option'] = '1';
        $default['road_mileage_percentage'] = '0';
        $default['google_distance_api_key'] = '';

        foreach ($default as $key => $value) {

            
            $option = new oc_setting();
            $option->store_id = $store->id;
            $option->group = 'deliverysetting';
            $option->key = $key;
            $option->value = $value;
            $option->serialized = 0;

            $option->save();
        }

        $social['polianna_facebook_id'] = '';
        $social['polianna_twitter_username'] = '';
        $social['polianna_gplus_id'] = '';
        $social['polianna_linkedin_id'] = '';
        $social['polianna_youtube_id'] = '';

        foreach ($social as $key => $value) {

            
            $option = new oc_setting();
            $option->store_id = $store->id;
            $option->group = 'polianna';
            $option->key = $key;
            $option->value = $value;
            $option->serialized = 0;

            $option->save();
        } 


        $layout = new layout;

        $layout->fill([
            'store_id'          => $store->id,
            'theme'             => 6,
            'about_bg'          => '',
            'about_content'     => '',
            'booking_bg'        => '',
            'booking_content'   => '',
            'gallery_bg'        => '',
            'gallery_content'   => '',
            'popular_bg'        => '',
            'popular_content'   => '',
            'category_bg'       => '',
            'category_content'  => '',
            'rating_bg'         => '',
            'rating_content'    => '',
            'opening_bg'        => '',
            'opening_content'   => '',
        ]);

        $layout->save();

        return redirect()->route('admin.settings.shop.list');

    }

    public function delete(Request $request){
        $data = Auth::guard()->user();

        if($data['user_group_id'] == 10){
            return redirect()->route('admin.dashboard');
        }

        oc_store::whereIn('store_id', $request)->delete();
        return redirect()->back();
    }
}
