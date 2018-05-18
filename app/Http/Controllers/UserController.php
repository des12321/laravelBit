<?php

namespace App\Http\Controllers;

use anlutro\cURL\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
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
            return redirect('/dashboard');
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
}
