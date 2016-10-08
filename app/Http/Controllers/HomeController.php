<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article_all = Article::get();

        return view('index', compact('article_all'));
    }

    public function event_list(Request $request)
    {
        $article_all = DB::table('articles')->paginate(5);

        return view('event-list', compact('article_all'));
    }

    public function event_single($articleId)
    {
        $article_single = Article::find($articleId);

        return view('event-single', compact('article_single'));
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
