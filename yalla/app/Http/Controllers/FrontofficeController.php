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

    public function knowUs()
    {
        return view('front.connaitre');
    }

    public function supportUs()
    {
        return view('front.soutenir');
    }

    public function actualite()
    {
        $articles = Article::all();
        return view('front.actualites', compact('articles'));
    }

    public function projet()
    {
        return view('front.projet');
    }
}
