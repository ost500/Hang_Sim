<?php

namespace App\Http\Controllers;

use App\ArticleList;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function show()
    {

        $articleList = DB::table('article_lists')->paginate(5);

//        return response()->json($articleList);
        return view('event-list', compact('articleList'));
    }

    public function event_list(Request $request)
    {
        $article_all = DB::table('articles')->paginate(5);
        return view('event-list', compact('article_all'));
    }
}
