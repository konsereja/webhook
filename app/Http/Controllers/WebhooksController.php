<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Webhook;
use Illuminate\Database\Eloquent\Model;





class WebhooksController extends Controller
{
    // private $entity,
    //         $mode,
    //         $data,
    //         $hook;
    public function index()
    {
        $amo = \Ufee\Amo\Amoapi::setInstance([
            'id' => 8838928,
            'domain' => 'dlatestov',
            'login' => 'mery131@yandex.ru',
            'hash' => '7886508966a22134d3a844581c61a10841d91ad7',
            
            //'zone' => 'com', // default: ru
           // 'timezone' => 'Europe/London', // default: Europe/Moscow
           // 'lang' => 'en' // default: ru
        ]);
    
                
       // $lead = $amo->leads()->find('24901995');
        //file_put_contents('log.txt', print_r($lead, 1), FILE_APPEND);

        $hooks= Webhook::latest()->get();
        $hooks = json_decode($hooks);
        
        return view('webhook.index', ['hooks'=>$hooks]);

    }

    public function handler(Request $request)
    {   

            $hook_data = $request->post();
          
            reset($hook_data);
            $entity = key($hook_data);
            $mode = key($hook_data[$entity]);
            $data = $hook_data[$entity][$mode];
            $hook = $entity.'_'.$mode;
            

            file_put_contents('log.txt', print_r($hook_data, 1), FILE_APPEND);
            $webhook = new Webhook;
            $webhook->webhook = json_encode($hook_data, JSON_UNESCAPED_UNICODE);
            $webhook->save();

            //$hook_first_key = array_key_first($hook_data);
           
           // file_put_contents('log.txt', print_r($hook_data, 1), FILE_APPEND);

            // reset($hook_data['leads']);
            // $key_action = key($hook_data['leads']);
            // //file_put_contents('log.txt', print_r($key_action, 1), FILE_APPEND);
  
    }

}
