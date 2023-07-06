<?php
if(!isset($_COOKIE["user"])){
    header("Location: login.php");
}

if(isset($_POST["logout"])){
    setcookie("user","",time());
    header("Location: login.php");
}
?>


<!DOCTYPE html>
<html>

<head>

	<title>Donate Now</title>
	<link rel="stylesheet" href="css/style_donate.css">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style>
		body {
			background-image: url(nature.jpeg);
			background-size: cover;
			background-attachment: fixed;
			background-repeat: no-repeat;
		}
	</style>

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
</head>

<body>

	<div id="fh5co-wrapper">
		<div id="fh5co-page">

			<header id="fh5co-header-section" class="sticky-banner">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.php"> Joy Makers-Together,We Create!</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="">
									<a href="index.php">Home</a>
								</li>
								<li>
									<a href="#" class="fh5co-sub-ddown">Get Involved</a>
									<ul class="fh5co-sub-menu">
										<li><a href="#">Donate</a></li>
										<li><a href="#">Fundraise</a></li>
										<li><a href="#">Campaign</a></li>

										<li><a href="#">Volunteer</a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="fh5co-sub-ddown">Projects</a>
									<ul class="fh5co-sub-menu">
										<li><a href="#">Water World</a></li>
										<li><a href="#">Cloth Giving</a></li>
										<li><a href="#">Medical Mission</a></li>
									</ul>
								</li>
								<li><a href="about.php">About</a></li>

								<li><a href="contact.php">Contact</a></li>
								<li class="d-flex">
									<form method="post">
										<button class="btn btn-danger" name="logout" value="logout">Logout</button>
									</form>
								</li>
							</ul>
							
						</nav>
					</div>
				</div>
			</header>






			<h1 class="header">Donate Now</h1><br>
			<p class="paragraph">Thank you for considering a donation to our organization! Your support helps us
				continue to help out those who
				are
				actually in need. Please fill out the form below to make a donation.</p>

			<form class="fm" action="submit-donation.php" method="post">
				<div class="input"><label class="lbl" for="name"><b>Name:</b></label>
					<input class="input-info" type="text" id="name" name="name" required>
				</div>

				<div class="input"><label class="lbl" for="phone"><b>Phone Number:</b></label>
					<input class="input-info" type="tel" id="phone" name="phone" required>
				</div>

				<div class="input"><label class="lbl" for="email"><b>E-mail:</b></label>
					<input class="input-info" type="email" id="email" name="email" required>
				</div>

				<div class="input"><label class="lbl" for="donation"><b>Donating Item:</b></label>
					<input class="input-info" type="text" id="donation" name="donation" required>
				</div>
				<div class="input"><label class="lbl"><b>How did you hear about us?</b></label><br></div>
				<div class="input"><label class="lbl">Friends/Family</label>
					<input class="input-radio" type="radio" name="how_hear" value="friends_family" checked>
				</div>
				<div class="input"><label class="lbl">Online Ads</label>
					<input class="input-radio" type="radio" name="how_hear" value="online_ads">
				</div>
				<div class="input"><label class="lbl">Searching Online</label>
					<input class="input-radio" type="radio" name="how_hear" value="searching_online">
				</div>
				<div class="input"><label class="lbl">Others</label>
					<input class="input-radio" type="radio" name="how_hear" value="others">
				</div>

				<label class="lbl"><b>Message:</b></label>
				<textarea class="input-textarea" id="msg" name="msg"></textarea><br>

				<input class="btn-submit" type="submit" value="Submit Donation">
			</form>
		</div>
		<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->




	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<!-- Main JS -->
	<script src="js/main.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>