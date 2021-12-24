<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Carbon\Carbon;
use DB;
use App\Models\oc_setting;

class SocialMediaController extends Controller
{
    
    public function index(){
        $store_id = 46;
        $data = [];
        $settings=oc_setting::where('store_id','=',$store_id)->where('group','polianna')->get();
        
        foreach ($settings as $result) {
            if( $result['key'] == 'polianna_facebook_id' 
                || $result['key'] == 'polianna_twitter_username' 
                || $result['key'] == 'polianna_gplus_id' 
                || $result['key'] == 'polianna_linkedin_id' 
                || $result['key'] == 'polianna_youtube_id' 
            ){
                if (!$result['serialized']) {
                    $data[$result['key']] = $result['value'];
                } else {
                    $data[$result['key']] = unserialize($result['value']);
                }
            }
        }


        return Inertia::render('Admin/Settings/SocialMedia',[
            'data' => $data
        ]);
    }

    public function update(Request $request){
        $store_id = 46;
        // $data = $request->toArray();
        $data = $request['data'];
        $settings = oc_setting::where('store_id','=',$store_id)->where('group','polianna')->get();

        // dd($data['polianna_twitter_username']);
        DB::table('oc_setting')->where('store_id',$store_id)->where('key','polianna_facebook_id')->update(['value' => $data['polianna_facebook_id']]);
        DB::table('oc_setting')->where('store_id',$store_id)->where('key','polianna_twitter_username')->update(['value' => $data['polianna_twitter_username']]);
        DB::table('oc_setting')->where('store_id',$store_id)->where('key','polianna_gplus_id')->update(['value' => $data['polianna_gplus_id']]);
        DB::table('oc_setting')->where('store_id',$store_id)->where('key','polianna_linkedin_id')->update(['value' => $data['polianna_linkedin_id']]);
        DB::table('oc_setting')->where('store_id',$store_id)->where('key','polianna_youtube_id')->update(['value' => $data['polianna_youtube_id']]);
        return redirect()->back();
    }
}
