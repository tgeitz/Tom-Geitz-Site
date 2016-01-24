@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Write a New Article</h1>
	<hr/>
	
	{!! Form::open(['url' => 'articles']) !!}
		@include('articles._form', ['submitButtonText' => 'Add Article'])
	{!! Form::close() !!}
</div>
@include('errors.list')

@stop
