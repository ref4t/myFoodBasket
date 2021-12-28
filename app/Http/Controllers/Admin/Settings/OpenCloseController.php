<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Carbon\Carbon;

use App\Models\oc_setting;

class OpenCloseController extends Controller
        {   private $_times = array(
                '00:00' => 'Start day',
                '01:00' => "1:00 AM",
                '02:00' => "2:00 AM",
                '03:00' => "3:00 AM",
                '04:00' => "4:00 AM",
                '05:00' => "5:00 AM",
                '06:00' => "6:00 AM",
                '07:00' => "7:00 AM",
                '08:00' => "8:00 AM",
                '09:00' => "9:00 AM",
                '10:00' => "10:00 AM",
                '11:00' => "11:00 AM",
                '12:00' => "12:00 AM",
                '13:00' => "1:00 PM",
                '14:00' => "2:00 PM",
                '15:00' => "3:00 PM",
                '16:00' => "4:00 PM",
                '17:00' => "5:00 PM",
                '18:00' => "6:00 PM",
                '19:00' => "7:00 PM",
                '20:00' => "8:00 PM",
                '21:00' => "9:00 PM",
                '22:00' => "10:00 PM",
                '23:00' => "11:00 PM",
                '23:59' => 'End day'
            );
            private $_days = array(
                '0' => "Every day",
                '2' => 'Monday',
                '3' => 'Tuesday',
                '4' => 'Wednesday',
                '5' => 'Thursday',
                '6' => 'Friday',
                '7' => 'Saturday',
                '8' => 'Sunday',
            );
    public function index(Request $request) {

        $store_id = $request->session()->get('store_id');
        $timesetting = [];
        $settings=oc_setting::where('store_id','=',$store_id)->where('group','timesetting')->get();
        

        foreach ($settings as $result) {
            // if( $result['key'] == 'opening_time_bussness' 
            //     || $result['key'] == 'opening_time_delivery' 
            //     || $result['key'] == 'opening_time_collection' 
            //     || $result['key'] == 'opening_time' 
            //     || $result['key'] == 'delivery_gaptime' 
            //     || $result['key'] == 'collection_gaptime' 
            //     || $result['key'] == 'closing_dates' 
            //     || $result['key'] == 'business_closing_dates' 
            //     || $result['key'] == 'order_outof_bussiness_time' 
            //     || $result['key'] == 'delivery_same_bussiness' 
            //     || $result['key'] == 'delivery_same_bussiness' 
            //     || $result['key'] == 'collection_same_bussiness' 
            // ){
                if (!$result['serialized']) {
                    $timesetting[$result['key']] = $result['value'];
                } else {
                    $timesetting[$result['key']] = unserialize($result['value']);
                }
            // }
        }

        // $days = [];
        // $times = [];
        // $str_arr = preg_split ("/\ /", $data['opening_time']);
        // foreach($str_arr as $key=>$result){
        //     $split = preg_split ("/\,/", $result);
        //     $days[$key] = $split[0];
        //     $times[$key] = $split[1];
        // }

        // $split = preg_split ("/\-/", $times[0]);

        // $open = $split[0];
        // $close = $split[1];
        
        return Inertia::render('Admin/Settings/OpenClose',[
            'timesetting' => $timesetting
        ]);
    }

    public function update(Request $request){
        
        $timesetting = $request->all();
        $store_id = $request->session()->get('store_id');
        // dd($store_id);        
        foreach($timesetting['closing_dates'] as $key=>$time){
            $timesetting['closing_dates'][$key]=substr($time, 0, strpos($time, 'T'));
        }
        $updateTime=oc_setting::editSetting('timesetting',$timesetting,$store_id);
        $opening_time_bussiness = $opening_time_delivery = $opening_time_collection = '';
        /** time bussiness */
        $Everyday = $Monday = $Tuesday = $Wednesday = $Thursday = $Friday = $Saturday = $Sunday = array();

        if(isset($timesetting['bussines']['day']) && count($timesetting['bussines']['day']))
        {
            foreach($this->_days as $keyday => $day)
            {
                foreach($timesetting['bussines']['day'] as $keybussines => $bussinesday)
                {
                    if(in_array($keyday, $bussinesday))
                    {
                        switch($keyday)
                        {
                            case 0: $Everyday[] = $timesetting['bussines']['from'][$keybussines].'-'.$timesetting['bussines']['to'][$keybussines]; break;
                            case 2: $Monday[] = $timesetting['bussines']['from'][$keybussines].'-'.$timesetting['bussines']['to'][$keybussines]; break;
                            case 3: $Tuesday[] = $timesetting['bussines']['from'][$keybussines].'-'.$timesetting['bussines']['to'][$keybussines]; break;
                            case 4: $Wednesday[] = $timesetting['bussines']['from'][$keybussines].'-'.$timesetting['bussines']['to'][$keybussines]; break;
                            case 5: $Thursday[] = $timesetting['bussines']['from'][$keybussines].'-'.$timesetting['bussines']['to'][$keybussines]; break;
                            case 6: $Friday[] = $timesetting['bussines']['from'][$keybussines].'-'.$timesetting['bussines']['to'][$keybussines]; break;
                            case 7: $Saturday[] = $timesetting['bussines']['from'][$keybussines].'-'.$timesetting['bussines']['to'][$keybussines]; break;
                            case 8: $Sunday[] = $timesetting['bussines']['from'][$keybussines].'-'.$timesetting['bussines']['to'][$keybussines]; break;
                        }
                    }
                }
            }
            if (count($Monday) || count($Everyday)) $opening_time_bussiness .= ' Monday,'.implode('|', $this->array_merge_values($Monday, $Everyday));
            if (count($Tuesday) || count($Everyday)) $opening_time_bussiness .= ' Tuesday,'.implode('|', $this->array_merge_values($Tuesday, $Everyday));
            if (count($Wednesday) || count($Everyday)) $opening_time_bussiness .= ' Wednesday,'.implode('|', $this->array_merge_values($Wednesday, $Everyday));
            if (count($Thursday) || count($Everyday)) $opening_time_bussiness .= ' Thursday,'.implode('|', $this->array_merge_values($Thursday, $Everyday));
            if (count($Friday) || count($Everyday)) $opening_time_bussiness .= ' Friday,'.implode('|', $this->array_merge_values($Friday, $Everyday));
            if (count($Saturday) || count($Everyday)) $opening_time_bussiness .= ' Saturday,'.implode('|', $this->array_merge_values($Saturday, $Everyday));
            if (count($Sunday) || count($Everyday)) $opening_time_bussiness .= ' Sunday,'.implode('|', $this->array_merge_values($Sunday, $Everyday));
        }
        /** time delivery */
        $Everyday = $Monday = $Tuesday = $Wednesday = $Thursday = $Friday = $Saturday = $Sunday = array();
        if(isset($timesetting['delivery_same_bussiness']) && $timesetting['delivery_same_bussiness'] == 1)
        {
            $opening_time_delivery = $opening_time_bussiness;
        }
        else if(isset($timesetting['delivery']['day']) && count($timesetting['delivery']['day']))
        {
            foreach($this->_days as $keyday => $day)
            {
                foreach($timesetting['delivery']['day'] as $keydelivery => $deliveryday)
                {
                    if(in_array($keyday, $deliveryday))
                    {
                        switch($keyday)
                        {
                            case 0: $Everyday[] = $timesetting['delivery']['from'][$keydelivery].'-'.$timesetting['delivery']['to'][$keydelivery]; break;
                            case 2: $Monday[] = $timesetting['delivery']['from'][$keydelivery].'-'.$timesetting['delivery']['to'][$keydelivery]; break;
                            case 3: $Tuesday[] = $timesetting['delivery']['from'][$keydelivery].'-'.$timesetting['delivery']['to'][$keydelivery]; break;
                            case 4: $Wednesday[] = $timesetting['delivery']['from'][$keydelivery].'-'.$timesetting['delivery']['to'][$keydelivery]; break;
                            case 5: $Thursday[] = $timesetting['delivery']['from'][$keydelivery].'-'.$timesetting['delivery']['to'][$keydelivery]; break;
                            case 6: $Friday[] = $timesetting['delivery']['from'][$keydelivery].'-'.$timesetting['delivery']['to'][$keydelivery]; break;
                            case 7: $Saturday[] = $timesetting['delivery']['from'][$keydelivery].'-'.$timesetting['delivery']['to'][$keydelivery]; break;
                            case 8: $Sunday[] = $timesetting['delivery']['from'][$keydelivery].'-'.$timesetting['delivery']['to'][$keydelivery]; break;
                        }
                    }
                }
            }
            if (count($Monday) || count($Everyday)) $opening_time_delivery .= ' Monday,'.implode('|', $this->array_merge_values($Monday, $Everyday));
            if (count($Tuesday) || count($Everyday)) $opening_time_delivery .= ' Tuesday,'.implode('|', $this->array_merge_values($Tuesday, $Everyday));
            if (count($Wednesday) || count($Everyday)) $opening_time_delivery .= ' Wednesday,'.implode('|', $this->array_merge_values($Wednesday, $Everyday));
            if (count($Thursday) || count($Everyday)) $opening_time_delivery .= ' Thursday,'.implode('|', $this->array_merge_values($Thursday, $Everyday));
            if (count($Friday) || count($Everyday)) $opening_time_delivery .= ' Friday,'.implode('|', $this->array_merge_values($Friday, $Everyday));
            if (count($Saturday) || count($Everyday)) $opening_time_delivery .= ' Saturday,'.implode('|', $this->array_merge_values($Saturday, $Everyday));
            if (count($Sunday) || count($Everyday)) $opening_time_delivery .= ' Sunday,'.implode('|', $this->array_merge_values($Sunday, $Everyday));
        }
        /** time collection */
        $Everyday = $Monday = $Tuesday = $Wednesday = $Thursday = $Friday = $Saturday = $Sunday = array();
        if(isset($timesetting['collection_same_bussiness']) && $timesetting['collection_same_bussiness'] == 1)
        {
            $opening_time_collection = $opening_time_bussiness;
        }
        else if(isset($timesetting['collection']['day']) && count($timesetting['collection']['day']))
        {
            foreach($this->_days as $keyday => $day)
            {
                foreach($timesetting['collection']['day'] as $keycollection => $collectionday)
                {
                    if(in_array($keyday, $collectionday))
                    {
                        switch($keyday)
                        {
                            case 0: $Everyday[] = $timesetting['collection']['from'][$keycollection].'-'.$timesetting['collection']['to'][$keycollection]; break;
                            case 2: $Monday[] = $timesetting['collection']['from'][$keycollection].'-'.$timesetting['collection']['to'][$keycollection]; break;
                            case 3: $Tuesday[] = $timesetting['collection']['from'][$keycollection].'-'.$timesetting['collection']['to'][$keycollection]; break;
                            case 4: $Wednesday[] = $timesetting['collection']['from'][$keycollection].'-'.$timesetting['collection']['to'][$keycollection]; break;
                            case 5: $Thursday[] = $timesetting['collection']['from'][$keycollection].'-'.$timesetting['collection']['to'][$keycollection]; break;
                            case 6: $Friday[] = $timesetting['collection']['from'][$keycollection].'-'.$timesetting['collection']['to'][$keycollection]; break;
                            case 7: $Saturday[] = $timesetting['collection']['from'][$keycollection].'-'.$timesetting['collection']['to'][$keycollection]; break;
                            case 8: $Sunday[] = $timesetting['collection']['from'][$keycollection].'-'.$timesetting['collection']['to'][$keycollection]; break;
                        }
                    }
                }
            }
            if (count($Monday) || count($Everyday)) $opening_time_collection .= ' Monday,'.implode('|', $this->array_merge_values($Monday, $Everyday));
            if (count($Tuesday) || count($Everyday)) $opening_time_collection .= ' Tuesday,'.implode('|', $this->array_merge_values($Tuesday, $Everyday));
            if (count($Wednesday) || count($Everyday)) $opening_time_collection .= ' Wednesday,'.implode('|', $this->array_merge_values($Wednesday, $Everyday));
            if (count($Thursday) || count($Everyday)) $opening_time_collection .= ' Thursday,'.implode('|', $this->array_merge_values($Thursday, $Everyday));
            if (count($Friday) || count($Everyday)) $opening_time_collection .= ' Friday,'.implode('|', $this->array_merge_values($Friday, $Everyday));
            if (count($Saturday) || count($Everyday)) $opening_time_collection .= ' Saturday,'.implode('|', $this->array_merge_values($Saturday, $Everyday));
            if (count($Sunday) || count($Everyday)) $opening_time_collection .= ' Sunday,'.implode('|', $this->array_merge_values($Sunday, $Everyday));
        }

        /***Closing Dates***/
        
        if(isset($timesetting['closing_dates'])){
            $closing_dates = implode(',',array_filter($timesetting['closing_dates']));
            $data['business_closing_dates'] = trim($closing_dates);
        }
        /***End Closing Dates***/
      //  echo $opening_time_bussiness .'<br />'. $opening_time_delivery .'<br />'. $opening_time_collection;
        /** cap nhat gia tri trong bang setting */
        $data['opening_time_bussness'] = trim($opening_time_bussiness);
        $data['opening_time_delivery'] = trim($opening_time_delivery);
        $data['opening_time_collection'] = trim($opening_time_collection);
        oc_setting::editSetting('config_time', $data, $store_id);
        oc_setting::editSettingValue('config', 'opening_time', trim($opening_time_bussiness), $store_id);
        return redirect()->route('admin.settings.openclose.index');
    }
    function array_merge_values($arr1, $arr2){
        foreach($arr2 as $ar2)
        {
            if(!in_array($ar2, $arr1))
            {
                $arr1[] = $ar2;
            }
        }
        return $arr1;
	}
}
