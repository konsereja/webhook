<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmoapisController extends Controller
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

        
        
        return view('amoapi.index');

    }
    public function handler(Request $request){
        $amo = \Ufee\Amo\Amoapi::setInstance([
            'id' => 8838928,
            'domain' => 'dlatestov',
            'login' => 'mery131@yandex.ru',
            'hash' => '7886508966a22134d3a844581c61a10841d91ad7',
            
            //'zone' => 'com', // default: ru
           // 'timezone' => 'Europe/London', // default: Europe/Moscow
           // 'lang' => 'en' // default: ru
        ]);

        $lead = $amo->leads()->find($request->name);
        print_r($lead); //json_encode($request->name, JSON_UNESCAPED_UNICODE);
    }
}
