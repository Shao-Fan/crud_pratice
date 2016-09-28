<?php
namespace App\Http\Controllers;
use App\Article;

use Illuminate\Http\Request;

use App\Http\Requests;

class MyController extends Controller
{
    public function index()
    {
        $article = new Article();
        $article = $article->find(1);
        $article->title = 'test';
        // $article->save();
        // dd($article);

        // $str1 = "Hello Everyone
        // $str2 = "My name is <b>BillJian.</b>";
        // $str3 = "Welcome come my Website.";
        // return view('homepage',compact('str1','str2','str3'));
        return view('homepage',compact('article'));
    }
}
