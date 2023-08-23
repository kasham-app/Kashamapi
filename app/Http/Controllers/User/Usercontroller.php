<?php

namespace App\Http\Controllers\User;

use App\Charts\DashboardStatistics;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Usercontroller extends Controller
{
    public function index(DashboardStatistics $dashboard_statchart)
    {
        return view('dashboard.index',[
            'dashboard_statchart' => $dashboard_statchart->build()

        ]);
    }

    public function allclient()
    {
        $clients = DB::table('oauth_clients')->where("user_id", Auth::user()->id)->get();
        $client_count = DB::table('oauth_clients')->where("user_id", Auth::user()->id)->count();
        return view('dashboard.oauth',[
            'clients' =>$clients,'client_count' => $client_count
        ]);
    }

    public function registeroauth()
    {
        return view('dashboard.register-client');
    }
}
