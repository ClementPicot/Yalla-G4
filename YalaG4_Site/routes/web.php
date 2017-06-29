<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'FrontofficeController@index']);
Route::get('/notre-mission', ['as' => 'mission', 'uses' => 'FrontofficeController@mission']);
Route::get('/article/{id}', ['as' => 'article', 'uses' => 'FrontofficeController@viewArticle']);
Route::get('/nous-connaitre', ['as' => 'connaitre', 'uses' => 'FrontofficeController@knowUs']);
Route::get('/nous-soutenir', ['as' => 'soutenir', 'uses' => 'FrontofficeController@supportUs']);
Route::get('/actualite', ['as' => 'actu', 'uses' => 'FrontofficeController@actualite']);
Route::get('/projets', ['as' => 'projet', 'uses' => 'FrontofficeController@projet']);

Route::prefix('admin')->group(function() {
  Route::get('/article', ['as' => "admin.article","uses" => 'ArticleController@index']);
  Route::get('/article/edit/{id}', ['as' => "admin.article_edit","uses" => 'ArticleController@editArticle'])
  ->where('id', '[0-9]+');
  Route::put('/article/edit/{id}', ['as' => "admin.article_update","uses" => 'ArticleController@updateArticle']);
  Route::get('/article/add', ['as' => "admin.article_add","uses" => 'ArticleController@addArticle']);
  Route::post('/article/add', ['as' => "admin.article_create","uses" => 'ArticleController@createArticle']);
  Route::get('/article/delete/{id}', ['as' => "admin.article_delete","uses" => 'ArticleController@deleteArticle']);
  Route::get('/article/change/{id}', ['as' => "admin.change_visible","uses" => 'ArticleController@switchVisible']);

});
