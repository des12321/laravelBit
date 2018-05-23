<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CoreController extends BaseController
{
    public function showDashboard()
    {
        return view('core.lobby');
    }

    public function showMenu()
    {
        $url = 'http://18.236.104.133/portal/index.php/welcome/';
        return $url;
    }
}
