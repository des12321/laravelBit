<?php

namespace App\Http\Controllers;


use anlutro\cURL\Laravel\cURL;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Cookie;

class UserController extends BaseController
{
    public function showLogin(Request $request)
    {
        $cookieBank = $request->cookie("businetbybinanceusernamevalueusername");
        if (!empty($cookieBank)) {
            return view('core.lobby');
        } else {
            $cookie = Cookie::forget('businetbybinanceusernamevalueusername');
            $response = new \Illuminate\Http\Response(view('auth.login'));
            $response->withCookie($cookie);
            return $response;
        }

    }

    public function showRegistration()
    {
        return view('auth.registration');
    }

    public function fillTopBanner(Request $request)
    {
        $response = new \Illuminate\Http\Response();
        $cookieUser = $request->cookie("businetbybinanceusernamevalueusername");
    
        $url = 'http://18.236.104.133/portal/index.php/welcome/getUserRed/' . 1000398;

        $curl = cURL::get($url);
  
       $curlJson = json_decode($curl);
        $data= [
            'data' => $curlJson
        ];
       /*$data=[
        'biz_rango' => 'Bitcoiner',
        'value' => '1000109',
        'c_doctype_id' => "10000047",
        'biz_saldo_usd' => '0.00',
        'biz_saldo_btc' => '0.00'
       ];
       $res = [
        'data' => $data
       ];*/
       return response()->json($data, 200);
    }
}
