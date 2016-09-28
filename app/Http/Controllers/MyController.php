<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MyController extends Controller
{
    public function index()
    {
        $str1 = "Hello Everyone";
        $str2 = "My name is <b>BillJian.</b>";
        $str3 = "Welcome come my Website.";
        return view('homepage',compact('str1','str2','str3'));
    }
}
