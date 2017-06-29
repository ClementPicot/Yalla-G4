<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class FrontofficeController extends Controller {
  public function index()
  {
     return view('front.index', compact('articles'));
  }

  public function mission()
  {
    return view('front.mission');
  }

  public function viewArticle($id)
  {
    $article = Article::find($id);
    return view('front.article', compact('article'));
  }
}
