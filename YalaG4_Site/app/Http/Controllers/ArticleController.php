<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller {

  public function index()
  {
    $articles = Article::all();
    return view('admin.listing', compact('articles'));
  }

  public function editArticle($id)
  {
    $article = Article::find($id);
    return view('admin.edit', compact('article'));
  }

  public function updateArticle($id, Request $request)
  {
    Article::find($id)->update($request->all());
    return redirect(action('ArticleController@index'));
  }
  public function addArticle(Request $request)
  {
    return view('admin.add');
  }

  public function createArticle(Request $request)
  {
    Article::create($request->all());
    return redirect(action('ArticleController@index'));
  }
  public function deleteArticle($id)
  {
    $article = Article::find($id)->delete();
    return redirect(action('ArticleController@index'));
  }

  public function switchVisible($id)
  {
    $article = Article::find($id);
    if ($article->visible == 0) {
      $article->visible = 1;
      $article->save();
    } elseif ($article->visible == 1) {
      $article->visible = 0;
      $article->save();
    }
    return redirect(action('ArticleController@index'));
  }

}
