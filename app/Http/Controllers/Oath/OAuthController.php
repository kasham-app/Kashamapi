<?php

namespace App\Http\Controllers\Oath;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OAuthController extends Controller
{
    public function clients(Request $request)
    {

        $clients = $request->user()->clients;

        return view('oath.clients', compact('clients'));
    }

    public function authorizeoauth(Request $request)
    {
        $client_id = $request->get('client_id');
        $client = DB::table('oauth_clients')->where('id',$client_id)->first();
        $scopes = DB::table('oauth_access_tokens')->where('user_id',$client->user_id)->get();

        return view('vendor.passport.authorize',compact(
            'client','scopes'
        ));
    }

}
