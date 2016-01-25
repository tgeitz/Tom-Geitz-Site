@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-10 col-md-offset-1 show-article-section">
        <h1 style="text-align:center;">{{ $article->title }}</h1>
        <hr/>

        <article>
            {{ $article->body }}
        </article>

    @unless ($article->tags->isEmpty())
        <h5>Tags:</h5>
        <ul style="list-style: none;">
            @foreach($article->tags as $tag)
                <li>{{ $tag->name }}</li>
            @endforeach
        </ul>
    @endunless
        <h4><a href="/articles"><strong>Back to articles >></strong></a></h4>
    </div>
</div>
@stop