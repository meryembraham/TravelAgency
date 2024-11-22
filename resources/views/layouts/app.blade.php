<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    @yield('css')
	<link rel="stylesheet" href="{{asset('css/layout.css')}}">
	<link href='https://fonts.googleapis.com/css?family=Crete Round' rel='stylesheet'>
	<title>Travel Agency</title>
</head>
<body>
     <header>
     	<div style="width:1258px;" class="wrapper">
     		<h1> Travel Agency<span class="orange">.</span></h1>
     		<nav>
     			<ul>
     				<li><a href="{{ route('index') }}">accueil</a></li>
     				<li><a href="{{ route('destination') }}">Destination</a></li>
     				<li><a href="{{ route('circuit') }}">Circuit</a></li>
     				<li><a href="{{ route('index') }}#contact">Contact</a></li>
					@auth
					<form id="logoutform" style="margin:0px;display: inline;" method="POST" action="{{ route('logout') }}">
						@csrf
						</form>
					<li><a style="border-bottom: 2px solid #ff7a00" href="{{ url('/ajoute-des') }}">Ajoute destination</a></li>
					<li><a style="border-bottom: 2px solid #ff7a00" href="{{ url('/ajoute-circuit') }}">Ajoute circuit</a></li>
					<li><a style="border-bottom: 2px solid #ff7a00" onclick="document.getElementById('logoutform').submit();" href="#">Logout</a></li>
					@else
					<li><a style="border-bottom: 2px solid #ff7a00" href="{{ route('login') }}">Login</a></li>
					<li><a style="border-bottom: 2px solid #ff7a00" href="{{ route('register') }}">Register</a></li>
					@endif
				</ul>
     		</nav>
     	</div>
     </header>
            @yield('content')
    <footer>
     	 <div class="wrapper">
     	 	<h1>Travel Agency <span class="orange">.</span></h1>
     	 	<div class="copyright">Copyright @ 2021.Tous droits réservés.</div>
     	 </div>
     </footer>
</body>
</html>
