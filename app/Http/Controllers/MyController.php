<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MyController extends Controller
{
    public function index()
    {
        $str = 'Hello Everyone';
        $str2 = 'My name is  BillJian.';
        $str3 = 'Welcome come my Website.';
        return view('myhomepage', compact('str','str2', 'str3'));
    }
}
