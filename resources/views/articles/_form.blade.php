	<!-- Title Form Input -->
	<div class="form-group">
		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}
	</div>
		<!-- Body Form Input -->
	<div class="form-group">
		{!! Form::label('body', 'Body:') !!}
		{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
	</div>
	<!-- Date Form Input -->
	<div class="form-group">
		{!! Form::label('published_at', 'Publish on:') !!}
		{!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
	</div>
    <div class="form-group">
        {!! Form::label('tag_list', 'Tags:') !!}
        {!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}
	</div>
    <!-- Submit Form Input -->
	<div class=form-group">
		{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
	</div>

    @section('footer')
        <script>
            $('#tag_list').select2({
                placeholder: 'Choose or create a tag',
                tags: true
            });
        </script>