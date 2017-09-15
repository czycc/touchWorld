<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function tag($tag)
    {
        $articles = Article::where('tag',$tag)->get();
        return view('news', compact('articles'));

    }

    public function article($id)
    {
        $article = Article::find($id);
        return view('article', compact('article'));
    }
}
