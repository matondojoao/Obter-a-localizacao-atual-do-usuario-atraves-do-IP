<?php

namespace App\Http\Controllers;


use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        //ipDinamico $ip=$request->ip;
        $ip='105.168.188.238';

        $currentUserInfo=Location::get($ip);

        return view('user',compact('currentUserInfo'));
    }
}
