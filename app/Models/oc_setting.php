<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oc_setting extends Model
{
    use HasFactory;
    protected $table = 'oc_setting';

    public function getTimeToday($thu = 0, $store_id = 0)
    {   $timesetting=[];
        $timesettin = oc_setting::where('group','=','timesetting')->where('store_id','=', $store_id)->get();
        foreach ($timesettin as $result) {
			if (!$result['serialized']) {
				$timesetting[$result['key']] = $result['value'];
			} else {
				$timesetting[$result['key']] = unserialize($result['value']);
			}
		}
        if(!$thu)
            $thu = oc_setting::getThuToInt(); //th? ki?u int

            $data['time_bussiness'] = $data['time_delivery'] = $data['time_collection'] = array();
        /** time bussiness */
        if(isset($timesetting['bussines']['day']) && count($timesetting['bussines']['day']))
        {
            foreach($timesetting['bussines']['day'] as $keybussines => $bussinesday)
            {
                if(in_array($thu, $bussinesday) || in_array(0, $bussinesday))
                {
                    $data['time_bussiness'][] = array('from' => $timesetting['bussines']['from'][$keybussines], 'to' => $timesetting['bussines']['to'][$keybussines]);
                }
            }
        }
        /** time delivery */
        if(isset($timesetting['delivery_same_bussiness']) && $timesetting['delivery_same_bussiness'] == 1)
        {
            $data['time_delivery'] = $data['time_bussiness'];
        }
        else if(isset($timesetting['delivery']['day']) && count($timesetting['delivery']['day']))
        {
            foreach($timesetting['delivery']['day'] as $keydelivery => $deliveryday)
            {
                if(in_array($thu, $deliveryday) || in_array(0, $deliveryday))
                {
                    $data['time_delivery'][] = array('from' => $timesetting['delivery']['from'][$keydelivery], 'to' => $timesetting['delivery']['to'][$keydelivery]);
                }
            }
        }
        /** time collection */
        $Everyday = $Monday = $Tuesday = $Wednesday = $Thursday = $Friday = $Saturday = $Sunday = array();
        if(isset($timesetting['collection_same_bussiness']) && $timesetting['collection_same_bussiness'] == 1)
        {
            $data['time_collection'] = $data['time_bussiness'];
        }
        else if(isset($timesetting['collection']['day']) && count($timesetting['collection']['day']))
        {
            foreach($timesetting['collection']['day'] as $keycollection => $collectionday)
            {
                if(in_array($thu, $collectionday) || in_array(0, $collectionday))
                {
                    $data['time_collection'][] = array('from' => $timesetting['collection']['from'][$keycollection],'to' => $timesetting['collection']['to'][$keycollection]);
                }
            }
        }   
        if(count($data))
        {
            foreach($data as $key => $times)
            {
                if(count($times) > 1)
                {
                    for($i = 0; $i < count($times); $i++)
                    {
                        for($j = $i + 1; $j < count($times); $j++)
                        {
                            if(strtotime($times[$j]['from']) < strtotime($times[$i]['from']))
                            {
                                $temp = $data[$key][$i];
                                $data[$key][$i] = $data[$key][$j];
                                $data[$key][$j] = $temp;
                            }
                        }
                    }
                }
            }
        }
        return $data; 
    }
    public function showtimeconfig($store_id)
    {
        $timesetting = oc_setting::getTimeToday(0, $store_id);
        // $timesetting=array(
        //     'time_collection'=>array(array(
        //         "from" => "16:00",
        //          "to" => "21:50"
        //     )
        //     ),
        //     'time_delivery'=>array(array(
        //         "from" => "16:00",
        //         "to" => "21:50"
        //     )
        //     ),
        //     'time_bussiness'=>array(array(
        //         "from" => "16:00",
        //         "to" => "21:50"
        //     )
        //     )

        // );
        // dd($timesetting);
        $timecurrent = date('H:i');
        // change current time ..... according to Daylight Saving time 
        $timestamp = strtotime($timecurrent) + 60*60;
        $timecurrent = date('H:i', $timestamp);
        
        $data = array();
        $data['open'] = 0;
        $data['until'] = 0;
        $data['delivery'] = 0;
        $data['time_delivery'] = 0;
        if(count($timesetting['time_bussiness']))
        {
            foreach($timesetting['time_bussiness'] as $time)
            {
                if(strtotime($time['to']) < strtotime($time['from']))
                {
                    $temp = $time['from'];
                    $time['from'] = $time['to'];
                    $time['to'] = $temp;
                }
                if (strtotime($time['from']) <= strtotime($timecurrent) && strtotime($timecurrent) <= strtotime($time['to']))
                {
                    $data['open'] = true;
                }
                else
                {
                    if(!$data['open'] && strtotime($timecurrent) < strtotime($time['from']))
                    {
                        $data['until'] = strtotime($time['from']) - strtotime($timecurrent);
                    }
                    else if(!$data['open'])
                    {
                        $thu = oc_setting::getThuToInt();
                        $data['until'] = oc_setting::getUntilToNextDay('time_bussiness', $thu, $store_id);
                    }
                }
            }
        }
        else
        {
            $thu = oc_setting::getThuToInt();
            $data['until'] = oc_setting::getUntilToNextDay('time_bussiness', $thu, $store_id);
        }
        /** dilivery time */
        if(count($timesetting['time_delivery']))
        {
            foreach($timesetting['time_delivery'] as $time)
            {
                if(strtotime($time['to']) < strtotime($time['from']))
                {
                    $temp = $time['from'];
                    $time['from'] = $time['to'];
                    $time['to'] = $temp;
                }
                if (strtotime($time['from']) <= strtotime($timecurrent) && strtotime($timecurrent) <= strtotime($time['to']))
                {
                    $data['delivery'] = true;
                }
                else
                {
                    if(!$data['delivery'] && strtotime($timecurrent) < strtotime($time['from']))
                    {
                        $data['time_delivery'] = strtotime($time['from']) - strtotime($timecurrent);
                    }
                    else if(!$data['delivery'])
                    {
                        $thu = oc_setting::getThuToInt();
                        $data['time_delivery'] = oc_setting::getUntilToNextDay('time_delivery', $thu, $store_id);
                    }
                }
            }
        }
        else
        {
            $thu = oc_setting::getThuToInt();
            $data['time_delivery'] = oc_setting::getUntilToNextDay('time_delivery', $thu, $store_id);
        }
        return $data;
    }
      /** lay quang thoi gian mo cua cua shop lan tiep theo */
      public function getUntilToNextDay($type, $thu, $store_id)
      {
          $flag = false;
          for($i = 1; $i <= 7; $i++)
          {
              $timeNextDay = oc_setting::getTimeToday($i, $store_id);
              if(isset($timeNextDay[$type][0]['from']))
              {
                  $flag = true;
                  break;
              }
          }
          if($flag){
              $thu++;
              if($thu > 8)
              {
                  $thu = 2;
              }
              $timeNextDay = oc_setting::getTimeToday($thu, $store_id);
              if(isset($timeNextDay[$type][0]['from']))
              {
                  // change current time ..... according to Daylight Saving time 
                  $timecurrent = date('H:i');
                  $timestamp = strtotime($timecurrent) + 60*60;
                  $timecurrent = date('H:i', $timestamp);
                  //return 24*60*60 + (strtotime($timeNextDay[$type][0]['from']) - strtotime(date('H:i')));
                  return 24*60*60 + (strtotime($timeNextDay[$type][0]['from']) - strtotime($timecurrent));
              }
              else
              {
                  return 24*60*60 + oc_setting::getUntilToNextDay($type, $thu, $store_id);
              }
          }
          else
          {
              return 0;
          }
      }
    public function getThuToInt()
    {
        $weekday = date("l");
        $weekday = strtolower($weekday);    
        switch($weekday) {
            case 'monday':
                $weekday = 2;
                break;
            case 'tuesday':
                $weekday = 3;
                break;
            case 'wednesday':
                $weekday = 4;
                break;
            case 'thursday':
                $weekday = 5;
                break;
            case 'friday':
                $weekday = 6;
                break;
            case 'saturday':
                $weekday = 7;
                break;
            default:
                $weekday = 8;
                break;
        }
        return $weekday;
    }
}
