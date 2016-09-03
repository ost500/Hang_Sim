<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = Article::where('id','>',1)->get();

        return view('home', compact('a'));
    }

    public function abcd(Request $request)
    {
        echo $request->fname;
        $b = new Article();
        $b->content = $request->fname;
        $b->save();

        return redirect('home');
    }
}
