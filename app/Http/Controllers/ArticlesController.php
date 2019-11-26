<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($articleId)
    {
      $article = Article::find($id);
      return view('articles.show', ['article'=> $article]);
    }
}
