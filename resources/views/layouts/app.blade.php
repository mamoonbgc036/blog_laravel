<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Document</title>
</head>
<body>
<header>
		<div id="subheader">
			<div id="leftMenu">
				<ul>
					<li><a href="{{ route('home') }}">Home</a></li>
					<li><a href="{{ route('dashboard') }}">Dashboard</a></li>
				</ul>
			</div>
			<div id="rightMenu">
				<ul>
					@auth 
					<li><img src="{{ asset('storage/'. auth()->user()->image) }}" alt=""></li>
					<li><a href="">{{ auth()->user()->name }}</a></li>
					<li>
						<form action="{{ route('logout') }}" method="post">
							@csrf
							<button>Logout</button>
						</form>
					</li>
					@endauth
					@guest 
					<li><a href="{{ asset('login') }}">Login</a></li>					
					<li><a href="{{ asset('register') }}">Register</a></li>
					@endguest
				</ul>
			</div>
		</div>
		<div>
			<h2 id="textcenter">Share Your Idea, Enriched Your Knowledge</h2>
		</div>
		<div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<a href="">Learn More</a></p>
		</div>
	</header>
    @yield('content')
</body>
</html>