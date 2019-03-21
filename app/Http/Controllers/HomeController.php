<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //china's way
        // return view('articles')->withArticles(\App\Article::all());
        
        //winnie's way
        
        $articles = Article::all();
        return view('articles')->with(compact('articles'));
    }
}
