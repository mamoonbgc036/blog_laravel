@extends('layouts.app')
@section('content')
    <div id="login">
		@if(isset($posts))
		<h2 id="textcenter">Edit Your Post...</h2>
        <form action="{{ route('edit.update', $posts) }}" method="post" enctype="multipart/form-data">
		@else
		<h2 id="textcenter">Create Your Post...</h2>
        <form action="{{ route('post') }}" method="post" enctype="multipart/form-data">
		@endif
            @csrf
            <div>
				<label>Post Heading</label>
				<input type="text" name="Heading" placeholder="Enter Post Heading" value="{{ isset($posts) ? $posts['Heading'] : '' }}">
				@error('Heading')
					<p id="textRed">{{ $message }}</p>
				@enderror
			</div>
			<div>
				<label>Post Details</label>
				<textarea name="body">{{ isset($posts) ? $posts['body'] : '' }}</textarea>
				@error('body')
					<p id="textRed">{{ $message }}</p>
				@enderror
			</div>
			<div>
				<label>Image</label>
				<input type="file" name="image">
				@error('image')
					<p id="textRed">{{ $message }}</p>
				@enderror
			</div>
			<button type="submit">Submit</button>
        </form>
	</div>
@endsection