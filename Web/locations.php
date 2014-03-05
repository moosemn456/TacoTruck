<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" name="viewport" content="initial-scale=1.0, user-scalable=no"/>
	<title>Locations</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Swanky+and+Moo+Moo' rel='stylesheet' type='text/css'>
	
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?&amp;sensor=false"></script>
    <script type="text/javascript" src="js/locations.js"></script>
 
</head>
<body>
	<!-- Page navigation menu -->
	<nav id="navbar">
		<ul>
			<li><img id="logoImg" src="img/taco_truck_logo.png" alt="Logo" title="Logo"></li>
			<li><a href="index.php">Order</a></li>
			<li><a href="about.php">About</a></li>
			<li class="select"><a>Locations</a></li>
			<li id="accountLink"><a href="account.php">Sign In/Create Account</a></li>
		</ul>
	</nav>
	<div id="navSpace"></div>

	<article id="locations">
		<ul>
			<li><h1>Location1</h1></li>
			<li>location2</li>
			<li>location3</li>
			<li>location4</li>
			<li>location5</li>
		</ul>
	</article>
	<div id="map-canvas"></div>

	<script src="js/main.js"></script>
</body>
</html>
