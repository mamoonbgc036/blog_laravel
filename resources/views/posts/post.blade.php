@extends('layouts.app')
@section('content')
    <div id="login">
		<h2 id="textcenter">Create Your Post...</h2>
		<form action="{{ route('post') }}" method="post" enctype="multipart/form-data">
			@csrf
			<div>
				<label>Post Heading</label>
				<input type="text" name="Heading" placeholder="Enter Post Heading">
			</div>
			<div>
				<label>Post Details</label>
				<textarea name="body"></textarea>
			</div>
			<div>
				<label>Image</label>
				<input type="file" name="image">
			</div>
			<button type="submit">Submit</button>
		</form>
	</div>
@endsection