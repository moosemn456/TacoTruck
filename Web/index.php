<?php

require_once '../database/login.php';
$db = new mysqli($db_hostname, $db_username, $db_password, $db_database);
if($db->connect_errno > 0){
	die('Unable to connect to database [' . $db->connect_error . ']');
}


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Taco Truck!</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/accordion.css">
	<link href='http://fonts.googleapis.com/css?family=Swanky+and+Moo+Moo' rel='stylesheet' type='text/css'>

	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<script src="js/jquery.js"></script>

	<script>
  $(function() {
    $( "#accordion" ).accordion({
      event: "click hoverintent"
    });
  });

  $(function() {
    $( document ).tooltip();
  });
  </script>

</head>
<body>
	<!-- Page navigation menu -->
	<nav id="navbar">
		<ul>
			<li><img id="logoImg" src="img/taco_truck_logo.png" alt="Logo" title="Logo"></li>
			<li class="select"><a>Order</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="locations.html">Locations</a></li>
			<li id="accountLink"><a href="account.html">Sign In/Create Account</a></li>
		</ul>
	</nav>
	<div id="navSpace"></div>

	<!-- Order Pane -->
	<div id="orderPane">
		<h2 id="order">Order </h2>
		<!-- List of tacos in order -->
		<ul>
			<li>Taco 1: $0.00<img class="cancelButton" src="img/cancel_icon.png" alt="Cancel" title="Cancel"></li>
			<li>Taco 3: $0.00<img class="cancelButton" src="img/cancel_icon.png" alt="Cancel" title="Cancel"></li>
			<li>Custom Taco 1: $0.00<img class="cancelButton" src="img/cancel_icon.png" alt="Cancel" title="Cancel"></li>
		</ul>
		<!-- Tax and total -->
		<ul>
			<li id="taxTotal">Tax: $0.00</li>
			<li id="grandTotal">Grand Total: $0.00</li>
		</ul>
		<input type="submit" id="submitOrder" value="Check Out"/>
	</div>


	<!-- Table for menu -->
	<div id="menuPane">
		<h2>Menu</h2>
		<table id="menuTable">
			<tr class="tacoRow">
				<td><img src="img/taco_icon.png" alt="Taco 1"></td>
				<td><img src="img/taco_icon.png" alt="Taco 2"></td>
				<td><img src="img/taco_icon.png" alt="Taco 3"></td>
				<td><img src="img/taco_icon.png" alt="Taco 4"></td>
			</tr>
			<tr>
				<td>Taco 1</td>
				<td>Taco 2</td>
				<td>Taco 3</td>
				<td>Taco 4</td>
			</tr>
			<tr class="tacoRow">
				<td><img src="img/taco_icon.png" alt="Taco 5"></td>
				<td><img src="img/taco_icon.png" alt="Taco 6"></td>
				<td><img src="img/taco_icon.png" alt="Taco 7"></td>
				<td><img src="img/taco_icon.png" alt="Taco 8"></td>
			</tr>
			<tr>
				<td>Taco 5</td>
				<td>Taco 6</td>
				<td>Taco 7</td>
				<td>Taco 8</td>
			</tr>
		</table>
		<table>
			<tr class="tacoRow">
				<td id="customTaco"><img src="img/plus_icon.png" alt="Custom Taco"></td>
				<td id="customTaco"><img src="img/previous_icon.png" alt="Previous Taco"></td>
			</tr>
			<tr>
				<td id="customTaco">Custom Taco</td>
				<td id="customTaco">Previous Taco</td>
			</tr>
		</table>
	</div>
	
	<div id="ingredientsPane">
		<h2>Ingredients</h2>

		<div id="accordion">
			<h3>Section 1</h3>
			<div>
				<p>
					Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
					ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
					amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
					odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
				</p>
			</div>
			<h3>Section 2</h3>
			<div>
				<p>
					Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
					purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
					velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
					suscipit faucibus urna.
				</p>
			</div>
			<h3>Section 3</h3>
			<div>
				<p>
					Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
					Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
					ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
					lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
				</p>
				<ul>
					<li>List item one</li>
					<li>List item two</li>
					<li>List item three</li>
				</ul>
			</div>
			<h3>Section 4</h3>
			<div>
				<p>
					Cras dictum. Pellentesque habitant morbi tristique senectus et netus
					et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
					faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
					mauris vel est.
				</p>
				<p>
					Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
					Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
					inceptos himenaeos.
				</p>
			</div>
		</div>

	</div>


	<script src="js/main.js"></script>
</body>
</html>
