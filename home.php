<?php
	error_reporting(0);
	session_start();
	session_unset();
	session_destroy();
?>
<html>
	<title>Library System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/w3.css">
	<style> 
		body {
			background-image: url("asset/home1.jpg"); }
	 </style>
	<body>
		<div class="w3-top">
			<div class="w3-container w3-teal w3-card-4" align=center>
				<h1>Library Management System </h1>
			</div>
			<div class="w3-bar w3-green w3-card-4">
				<a href="home.php" class="w3-bar-item w3-btn w3-mobile w3-hover-pale-green">Home</a>
				<a href="gust/gust.php" class="w3-bar-item w3-btn w3-mobile w3-hover-pale-green">Guest</a>
				<a href="userin.php" class="w3-bar-item w3-btn w3-mobile w3-right w3-hover-pale-green">Login / Sign Up</a>
			</div>
		</div>
		<div class="w3-container w3-card-4" align=center style="margin-top:10%">
			<img src="asset/1.jpg">
		</div>
		<br>
		<div class="w3-container w3-sand w3-card-4">
			<p>Welcome to Library Management System Developed by Hemanta Sarangi. This is a sofisticated Library Book Management System.</p>
		</div>
		<div class="w3-panel w3-pale-green w3-card-4">
	 		<h3>Planned Upcoming Features :</h3>
  			<p> </p>
			<p><a href="gust/gust.php" class="w3-btn w3-round-large w3-green w3-border" style="width:10%">Guest Login</a><br> If you just got no time to sign up and folow the procedure then access books like a guest.</p>
			<p><a href="userin.php" class="w3-btn w3-round-large w3-green w3-border" style="width:10%">Student Sign Up</a><br> Login or signup to access books and request for more new books in the library.(we have added a new feature to message between registered users)</p>
			<p><a href="userin.php" class="w3-btn w3-round-large w3-green w3-border" style="width:10%">Provider Sign Up</a><br> Book Providers can also register so that they can market their books on this site. But before signing up as a provider please contact the LMS Admin for a Provider's Secret Key.</p>
		</div>
		<div class="w3-container w3-teal w3-card-4">
			<p> Contact us - <br>
			Phone - 1234567891 <br>
			Email - hemant@gmail.com <br>
			</p>
		</div>
	</body>
</html>