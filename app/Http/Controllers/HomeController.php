<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $articles = Article::latest()->paginate(7);
        return view('welcome')->with('articles', $articles);
    }
}
