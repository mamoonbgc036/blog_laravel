@extends('layouts.app')
@section('content')
<div id="maincontent">
	@if($allPosts->count())
		@foreach($allPosts as $post)
		<div id="post">
			<div id="body">
				<div id="postContent">
					<h2>{{ $post->Heading }}</h2>
					<p>by <a href="">{{ $post->user->name }}</a> at {{ $post->created_at->diffForHumans() }}</p>
					<p> {{ Str::limit($post->body, 150) }} <a href="{{ route('post.single',$post->id) }}">More</a></p>
				</div>
				<div id="postImage">
					<img src="{{ asset('storage/'.$post->image) }}">
				</div>
			</div>
			<p>
				@auth 
				<form action="{{ route('like',$post->id) }}" method="post">
					@csrf
					<button type="submit">Like</button>
				</form>
				@endauth
			</p>
		</div>
		<hr> 
		@endforeach
		@else 
		<h3>There is no post now..</h3>
	@endif
</div>	
@endsection