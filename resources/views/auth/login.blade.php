@extends('layouts.app')
@section('content')
    <div id="login">
		<h2 id="textcenter">Login</h2>
		<form action="{{ route('login') }}" method="post">
			@csrf
			<div>
				<label>Email</label>
				<input type="text" name="email" placeholder="Your Email">
			</div>
			<div>
				<label>Password</label>
				<input type="password" name="password" placeholder="Your password">
			</div>
			<button type="submit">Submit</button>
		</form>
		<p id="textcenter">Have no account <a href="{{ route('register') }}">register</a></p>
	</div>
@endsection