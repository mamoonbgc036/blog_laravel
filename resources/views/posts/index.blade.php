@extends('layouts.app')
@section('content')
<div id="maincontent">
	@if($allPosts->count())
		@foreach($allPosts as $post)
		<div id="post">
			<h2>{{ $post->Heading }}</h2>
			<p>by <a href="">{{ $post->user->name }}</a> at {{ $post->created_at->diffForHumans() }}</p>
			<div id="body">
				<p> {{ $post->body }} <a href="{{ route('post.single',$post->id) }}">More</a></p>
				<img src="{{ asset('storage/'.$post->image) }}">
			</div>
		</div>
		<hr> 
		@endforeach
		@else 
		<h3>There is no post now..</h3>
	@endif
</div>	
@endsection