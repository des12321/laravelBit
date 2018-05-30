<?php

namespace App\Http\Controllers;

use anlutro\cURL\Laravel\cURL;
use Dotenv\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Cookie;
use Mockery\Exception;
use PhpParser\Node\Expr\Array_;

class AuthUserController extends Controller
{

    public function loginUser(Request $request)
    {

       
        try {
             $validator = $request->validate([
            'usernameLogin' => 'required',
            'passwordLogin' => 'required'
            ]);
             
            $username = \Request::input('usernameLogin');
            $passaword = \Request::input('passwordLogin');
            $url = "http://18.236.104.133/portal/index.php/welcome/getUser";
            $data = [
                'name' => $username,
                'password' => $passaword
            ];
            $curl = cURL::post($url, $data);

            $jsonCurl = json_decode($curl);
            $idUser = $jsonCurl->ad_user_id;
            if (!empty($jsonCurl)) {
                $cookie_new = cookie('businetbybinanceusernamevalueusername', $idUser, 60);
                $response = new \Illuminate\Http\Response(view('core.lobby'));
                $response->withCookie($cookie_new);
                return $response;
            } else {
               $cookie = Cookie::forget('businetbybinanceusernamevalueusername');
                $response = new \Illuminate\Http\Response(view('auth.login'));
                $response->withCookie($cookie);
                return $response;
            }

        } catch (Exception $exception) {

        }
    }

    public function logoutUser()
    {
        $cookie = Cookie::forget('businetbybinanceusernamevalueusername');
        $response = new \Illuminate\Http\Response(view('auth.login'));
        $response->withCookie($cookie);
        return $response;
    }

}