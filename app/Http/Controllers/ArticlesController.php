<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use App\Article;
use App\Http\Controllers\Auth\AuthController;
use Carbon\Carbon;

class ArticlesController extends Controller
{
    public function index()
    {
    	$articles = Article::latest()->published()->get();
    	return view('articles.index')->with('articles', $articles);
    }

    public function show($id)
    {
    	$article = Article::findOrFail($id);
    	dd($article->published_at);
    	return view('articles.show')->with('article', $article);
    }

    public function create()
    {
    	return view('articles.create');
    }

    public function store(ArticleRequest $request)
    {
    	Auth::user()->articles()->create($request->all());
    	return redirect('articles');
    }

    public function edit($id)
    {
    	$article = Article::findOrFail($id);
    	return view('articles.edit')->with('article', $article);
    }

    public function update($id, ArticleRequest $request)
    {
    	$article = Article::findOrFail($id);
    	$article->update($request->all());
    	return redirect('articles');
    }
}
