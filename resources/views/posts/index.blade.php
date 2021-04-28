@extends('layouts.app')
@section('content')
<div id="maincontent">
		<div id="post">
			<h2>new feature is coming</h2>
			<p>by <a href="">Abdullah Al Mamoon</a> at 12.04.2021</p>
			<div id="body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse <a href="">More</a></p>
				<img src="{{ asset('image/test.png') }}">
			</div>
		</div>
		<hr>
	</div>	
@endsection