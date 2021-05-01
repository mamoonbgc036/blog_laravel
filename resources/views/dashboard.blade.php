@extends('layouts.app')
@section('content')
    <div id="info">
		<h2 class="text-center">{{ auth()->user()->name }}</h2>
		<h3 class="text-center">Dashboard</h3>
		<h4 class="text-center"><a class="btn btn-warning" href="{{ route('post') }}">Create post</a></h4>
	</div>
	<table class="table table-dark">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Heading</th>
	      <th scope="col">Image</th>
	      <th>Likes</th>
	      <th id="textcenter" scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@if($userPosts->count())
		  @foreach($userPosts as $userPost)
		  <tr>
			<th scope="row">{{ $userPost->id }}</th>
			<td><a href="">{{ $userPost->Heading }}</a></td>
			<td><img src="{{ asset('storage/'.$userPost->image) }}"></td>
			<td>5</td>
			<td>
				<ul id="action">
					<li><a class="btn btn-info" href="">Update</a></li>
					<li><a class="btn btn-danger" href="">Delete</a></li>
				</ul>
			</td>
			</tr>
		  @endforeach
		@else 
			<tr>You have no post</tr>
		@endif
	  </tbody>
	</table>
@endsection