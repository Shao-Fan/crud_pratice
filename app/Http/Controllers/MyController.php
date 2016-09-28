<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;


class MyController extends Controller
{
    public function index()
    {
        // $article = new Article();
        // $article = $article->find(1);
        // $article = Article::find(1);
        $article_all = Article::orderBy('id', 'ASC')->take(5)->get();
        // dd($article_all);
        // $str = 'Hello Everyone';
        // $str2 = 'My name is  BillJian.';
        // $str3 = 'Welcome come my Website.';
        return view('myhomepage', compact('article_all'));
    }
}
