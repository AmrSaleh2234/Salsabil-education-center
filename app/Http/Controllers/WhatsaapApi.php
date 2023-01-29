<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WhatsaapApi extends Controller
{
    public $url;
    public $token;

    public function __construct()
    {
        $this->url = env('WHATSAPP_URL');
        $this->token = env('WHATSAPP_TOKEN');
    }

    public function sendWelcomeMessage()
    {
        //$data=[ "messaging_product"=> "whatsapp", "to"=> "201285323276", "type"=> "template", "template"=> [ "name"=> "hello_world", "language"=> [ "code"=> "en_US" ] ] ];
//        curl -i -X POST `
//
//    -H 'Authorization: Bearer EAArEMtUmbLIBAMiSO11mZAGIgqrON9w4bZBZBZCDcO3oVVqvghMdM11RD2RZA7b9ZCR3pXZCOyB4y67ig5VmZBoBm3d02148ktQrSUeNup922kygiNaWwHKroTvkTDZAkeIzroZCMzOOR5HZAKsO4KpUBjPZB5c15Jp7zKLBgSD0O5hSrHBUmeV4IZCiTwv5uiZCZCnZAjZBZCWmFee4XI8QZDZD' `
//  -H 'Content-Type: application/json' `
//    -d '{ \"messaging_product\": \"whatsapp\", \"to\": \"201285323276\", \"type\": \"template\", \"template\": { \"name\": \"hello_world\", \"language\": { \"code\": \"en_US\" } } }'

        $data = [
            "messaging_product" => "whatsapp",
            "to" => "201285323276",
            "text" => [
                "body" => "hello world fggsd8tv  knlsdajj jkbdsauh jkhbasidhadsiou!"
            ]
        ];
        $respose = Http::withHeaders([
            'Authorization' => $this->token,
            'Content-Type' => 'application/json'
        ])->withBody(json_encode($data), 'application/json')->post($this->url);

        return response($respose);
    }
    public function recieveWelcomeMessage(Request $request){
        return response()->json($request);
    }
}