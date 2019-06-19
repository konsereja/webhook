<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Webhook;
use Illuminate\Database\Eloquent\Model;





class WebhooksController extends Controller
{
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

        $hooks= Webhook::latest('created_at')->get();
        $hooks = json_decode($hooks);
        
        return view('webhook.index', ['hooks'=>$hooks]);

    }

    public function hundler(Request $request)
    {   

            $hook_data = $request->all();
          
            // $hook_first_key = array_key_first($hook_data);
          
            file_put_contents('log.txt', print_r($hook_data, 1), FILE_APPEND);
          
            
            
            $webhook = new Webhook;
            $webhook->webhook = json_encode($hook_data, JSON_UNESCAPED_UNICODE);
           $webhook->save();

            
    }

   
}
