<?php

namespace App\Http\Controllers;

use App\ArticleList;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
    public function show()
    {
        $articleList = ArticleList::get();
        return view('event-list', compact('articleList'));
    }
}
