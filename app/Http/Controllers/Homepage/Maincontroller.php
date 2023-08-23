<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Maincontroller extends Controller
{
    public function index()
    {
        return view('main.index');
    }
}
