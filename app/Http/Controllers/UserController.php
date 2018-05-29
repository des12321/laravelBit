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
        \Log::debug('COOKIE BANK', [$cookieBank]);
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
        $cookieUser = $request->cookie("businetbybinanceusernamevalueusername");
        \Log::debug('NUEVOorden', [$cookieUser]);
        $urlApi = 'http://18.236.104.133/portal/index.php/welcome/getUserRed/1000398';
        $url = cURL::buildUrl($urlApi, ['id' => $cookieUser]);
        $idUser = $request->cookie("businetbybinanceusernamevalueusername");
        $curl = cURL::get($url);
        $curlJson = json_decode($curl);
        response()->json($curlJson, 200);
    }
}
