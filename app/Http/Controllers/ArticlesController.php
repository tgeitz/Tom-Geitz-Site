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
    /**
     * Show view displaying all articles.
     *
     * @return $this
     */
    public function index()
    {
    	$articles = Article::latest()->published()->get();
    	return view('articles.index')->with('articles', $articles);
    }

    /**
     * Show view displaying one article.
     *
     * @param $id
     * @return $this
     */
    public function show($id)
    {
    	$article = Article::findOrFail($id);
    	return view('articles.show')->with('article', $article);
    }

    /**
     * Show view with create article form.
     *
     * @return $this
     */
    public function create()
    {
        $tags = Tag::lists('name', 'id');
    	return view('articles.create')->with('tags', $tags);
    }

    /**
     * Save a new article.
     *
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticleRequest $request)
    {
    	$this->createArticle($request);

        \Session::flash('flash_message', 'Your article has been created!');
        return redirect('articles');
    }

    /**
     * Show view with edit article form.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
    	$article = Article::findOrFail($id);
        $tags = Tag::lists('name', 'id');
        return view('articles.edit', compact('article', 'tags'));
    }

    /**
     * Update an existing article.
     *
     * @param $id
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, ArticleRequest $request)
    {
    	$article = Article::findOrFail($id);
    	$article->update($request->all());
        $this->syncTags($article, $request->input('tag_list'));
    	return redirect('articles');
    }

    /**
     * Sync up the list of tags in the database.
     *
     * @param Article $article
     * @param array $tags
     */
    private function syncTags(Article $article, array $tags)
    {
        $article->tags()->sync($tags);
    }

    private function createArticle(ArticleRequest $request)
    {
        $article = Auth::user()->articles()->create($request->all());
        $this->syncTags($article, $request->input('tag_list'));
        return $article;
    }
}
