<?php
if(isset($_COOKIE['user'])){
    header("location: Donate_Now.php");
}
$host = "localhost";
$username = "root";
$password = "";
$database = "joymakers";
if(isset($_POST["submit"])){
    $user = $_POST["username"];
    $pass = $_POST["password"];
    $conn = mysqli_connect($host, $username, $password, $database);
    $query = "SELECT * FROM user WHERE user_name = '".$user."'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1){
        echo "<script>alert('user already exist');</script>";
    }
    else{
        $query = "INSERT INTO user(user_name, user_password) VALUES ('$user', '$pass')";
        $result = mysqli_query($conn, $query);
        setcookie("user",$user,time()+864000);
        header("Location: Donate_Now.php");
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"
    />
<link rel="stylesheet" href="css/login.css">
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

  


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
  <body style="background-image: url(nature.jpeg); background-size: cover; background-repeat: no-repeat;">

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
							<li class="active">
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
						</ul>
					</nav>
				</div>
			</div>
		</header>

    
<div class="wrapper">
      <h2>Service Man Create Account</h2>
      <p>Please fill in your credentials to login.</p>

      <form action="" method="post" onsubmit="return validateLogin();">
        
        
        <div class="innerbox">
            <div class="form-group">
              <label>Username</label>
              <input class="input input-text" type="text" id="username" name="username" class="form-control" />
              <!-- <span class="help-block">
                            <?php echo $email_err; ?>
                        </span> -->
            </div>

            <div
              class="form-group"
            >
              <label>Password</label>
              <input class="input input-pass" type="password" id="password" name="password" class="form-control" />
            </div>
          </div>
      

        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary" n />
        </div>
        <p>Already have an account? <a href="login.php">Login now</a></p>
       
      </form>
    </div>
    </div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->



  <script src="validationlogin.js"></script>


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

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
</body>
</html>