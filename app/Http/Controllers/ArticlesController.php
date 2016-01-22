<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use App\Article;
use App\User;
use App\Http\Controllers\Auth\AuthController;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Tag;

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
    	return view('articles.show')->with('article', $article);
    }

    public function create()
    {
        $tags = Tag::lists('name', 'id');
    	return view('articles.create')->with('tags', $tags);
    }

    public function store(ArticleRequest $request)
    {
    	$article = Auth::user()->articles()->create($request->all());
        $tagIds = $request->input('tags');
        $article->tags()->attach($tagIds);

        \Session::flash('flash_message', 'Your article has been created!');
        return redirect('articles');
    }

    public function edit($id)
    {
    	$article = Article::findOrFail($id);
        $tags = Tag::lists('name', 'id');
        return view('articles.edit', compact('article', 'tags'));
    }

    public function update($id, ArticleRequest $request)
    {
    	$article = Article::findOrFail($id);
    	$article->update($request->all());
    	return redirect('articles');
    }
}
