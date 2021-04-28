@extends('layouts.app')
@section('content')
<div id="login">
		<h2 id="textcenter">Register...</h2>
		<form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
            @csrf
			<div>
				<label>Name</label>
				<input type="text" name="name" placeholder="Your name">
			</div>
			<div>
				<label>Email</label>
				<input type="text" name="email" placeholder="Your email">
			</div>
			<div>
				<label>Username</label>
				<input type="text" name="username" placeholder="Enter Username">
			</div>
			<div>
				<label>Password</label>
				<input type="password" name="password" placeholder="Enter password">
			</div>
			<div>
				<label>Confirm Password</label>
				<input type="password" name="password_confirmation" placeholder="Confirm password">
			</div>
			<div>
				<label>Image</label>
				<input type="file" name="image">
			</div>
			<button type="submit">Submit</button>
		</form>
	</div>
    @endsection