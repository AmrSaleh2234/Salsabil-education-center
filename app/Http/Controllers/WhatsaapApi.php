<?php

namespace App\Http\Controllers;

use App\Models\test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WhatsaapApi extends Controller
{
    public $url;
    public $token;
    public $mobile;

    public function __construct()
    {
        $this->url = env('WHATSAPP_URL');
        $this->token = env('WHATSAPP_TOKEN');
        $this->mobile = env('WHATSAPP_SEND_MOBILE');
    }

    public function sendWelcomeMessage()
    {

//        //$data=[ "messaging_product"=> "whatsapp", "to"=> "201285323276", "type"=> "template", "template"=> [ "name"=> "hello_world", "language"=> [ "code"=> "en_US" ] ] ];
//        curl -i -X POST `
//  https://graph.facebook.com/v15.0/111055818557737/messages `
//    -H 'Authorization: Bearer EAArEMtUmbLIBALvX3SibXhRjdLIquHUN06c7QM4fctTRcamAQ1KVBGa8RFT9b4C0i1vAZAIXpmzb6zZBTxGZCiykG8vi2aPfw04fJkNZAjFjsTd7B12nOJz8B45cpM4pL9H0JDnfi7jzORkAXCmEkIxd3IdGGkNO0xfZBzy7FAbZC1nVh0RZCddDZCjPjwHwZANAdSbXZCYhp2gAZDZD' `
//  -H 'Content-Type: application/json' `
//    -d '{ \"messaging_product\": \"whatsapp\", \"to\": \"962777717245\", \"type\": \"template\", \"template\": { \"name\": \"hello_world\", \"language\": { \"code\": \"en_US\" } } }'

        $data = [
            "messaging_product" => "whatsapp",
            "to" => $this->mobile,//962777717245
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
        $challenge=$request->input("hub_challenge");//int
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
    public function recieveWelcomeMessage(){



        test::create(['object'=>'good']);

        $recieve=file_get_contents("php://input");
        if($recieve==null){
            exit;
        }
        $recieve = json_decode($recieve,true);
        $message= $recieve['entry'][0]['changes'][0]['value']['messages'][0]['text']['body'];
        $mobile= $recieve['entry'][0]['changes'][0]['value']['messages'][0]['from'];
        $data = [
            "messaging_product" => "whatsapp",
            "to" => $mobile,
            "text" => [
                "body" => $message
            ]
        ];
        $response = Http::withHeaders([
            'Authorization' => $this->token,
            'Content-Type' => 'application/json'
        ])->withBody(json_encode($data), 'application/json')->post($this->url);
        return response($response,200);
    }
}
