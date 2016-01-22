@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-12">--}}
            {{--<img src="images/ChimpComputer.jpg" id='main-monkey'>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<div class="col-md-10 col-md-offset-1">
    <div class="row">
        <h1>Tom Geitz</h1>
    </div>
</div>
<div class="col-md-10 col-md-offset-1">
    <div class="row">
        <p>Web developer based in Chicago.  Writer, multi-instrumentalist, and very likely the best Super Smash Bros player you'll ever meet.</p>
        <a href="https://twitter.com/tom_geitz" class="btn btn-default">Twitter</a>
        <a href="https://www.linkedin.com/in/tom-geitz-62b44797" class="btn btn-default">LinkedIn</a>
        <a href="https://www.github.com/tgeitz" class="btn btn-default">GitHub</a>
        <a href="/resume" class="btn btn-default">Resume</a>
    </div>
</div>
    <hr/>
<div class="col-md-10 col-md-offset-1">
    <div class="row">
        <h2>Projects</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-md-offset-1">
        <h3><a href="http://www.pmunderground.net/">Project M Underground</a></h3>
        <h5>A community site for the game <strong>Super Smash Bros.: Project M</strong>.  I help with the back end.</h5>
    </div>
    <div class="col-md-4 col-md-offset-1">
        <h3><a href="https://lit-waters-8964.herokuapp.com/">Place My Order</a></h3>
        <h5>A restaurant ordering app built with DoneJS.</h5>
    </div>
</div>
<hr/>
<div class="col-md-10 col-md-offset-1">
    <div class="row">
        <h2>Recent Articles</h2>
        <h3>Coding</h3>
        <h3>Smash</h3>
        <h3>Music</h3>
    </div>
</div>


@endsection
