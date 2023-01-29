<?php

namespace App\Http\Controllers;

use App\Models\test;
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
//  https://graph.facebook.com/v15.0/111055818557737/messages `
//    -H 'Authorization: Bearer EAArEMtUmbLIBALDezUkYfNpjU1dMb7FckeQ8BFjmWm3p1rZBGEPYj6tmyjftjiFZC5a56HOjdjhsjrZAxgPDuBvbeyp9Okv3hrv9oZAhjwOBEvRMZBRJ9PpsFeRNzdWg0oiZC1zAbX2rr2kYFgRZCRzHygXVZAkeRpjrQLJL2kFMPfsTPCcYwNEMrw7vReEGvUo0LkMr7VDJCQZDZD' `
//  -H 'Content-Type: application/json' `
//    -d '{ \"messaging_product\": \"whatsapp\", \"to\": \"201068936737\", \"type\": \"template\", \"template\": { \"name\": \"hello_world\", \"language\": { \"code\": \"en_US\" } } }'
        $data = [
            "messaging_product" => "whatsapp",
            "to" => "201068936737",
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

    public function recieve(Request $request)
    {
        test::create(['object'=>'sended']);
        $mode=$request->input("hub_mode");
        $challenge=$request->input("hub_challenge");
        $tok=$request->input("hub_verify_token");
        $mytoken = "prasath";
        if($mode && $tok){
            if($mode=="subscribe" && $tok == $mytoken){
                return response($challenge,200);
            }
            else{
                return response()->status(403);
            }
        }

    }
    public function recieveWelcomeMessage(Request $request){

            //        {
//            "object": "whatsapp_business_account",
//    "entry": [
//        {
//            "id": "8856996819413533",
//            "changes": [
//                {
//                    "value": {
//                    "messaging_product": "whatsapp",
//                        "metadata": {
//                        "display_phone_number": "16505553333",
//                            "phone_number_id": "27681414235104944"
//                        },
//                        "contacts": [
//                            {
//                                "profile": {
//                                "name": "Kerry Fisher"
//                                },
//                                "wa_id": "16315551234"
//                            }
//                        ],
//                        "messages": [
//                            {
//                                "from": "16315551234",
//                                "id": "wamid.ABGGFlCGg0cvAgo-sJQh43L5Pe4W",
//                                "timestamp": "1603059201",
//                                "text": {
//                                "body": "Hello this is an answer"
//                                },
//                                "type": "text"
//                            }
//                        ]
//                    },
//                    "field": "messages"
//                }
//            ]
//        }
//    ]
//}
        test::create(['object'=>'sended']);
//        $phone_no_id=$request->body
        $data = [
            "messaging_product" => "whatsapp",
            "to" => "201068936737",
            "text" => [
                "body" => "good morning!"
            ]
        ];
        $respose = Http::withHeaders([
            'Authorization' => $this->token,
            'Content-Type' => 'application/json'
        ])->withBody(json_encode($data), 'application/json')->post($this->url);
        return response($request,200);

    }
}
