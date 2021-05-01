@extends('layouts.app')
@section('content')
    <div id="single">
		<h3>{{ $post->Heading }}</h3>
		<h5>By {{ $post->user->name }}</h5>
		<img src="{{ asset('storage/'.$post->image) }}">
		<p>{{ $post->body }}</p>
	</div>
@endsection