@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-10 col-md-offset-1 article-index">
	    <h1 style="text-align:center;">Articles</h1>
        <hr/>
        <div class="article-list">
            @foreach ($articles as $article)
                <h2>
                    <a href='{{ url('/articles', [$article->id]) }}'>{{ $article->title }}</a>
                </h2>
                <h4>{{ $article->published_at->diffForHumans() }}</h4>
                {{--<p>{{ $article->body }}</p>--}}
            @endforeach
        </div>
    </div>
</div>
@stop