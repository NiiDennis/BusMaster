<?php require_once ("init.php");
 ?>
<?php session_start();

if(isset($_SESSION["id"])){ redirect_to("admin/dashboard.php") ; }
?>

<?php

if (isset($_POST['submit'])){
	$username = $_POST["username"];
	$password = $_POST["password"];

	$query = "select *  ";
	$query .= " FROM admin ";
	$query .= " WHERE username = '{$username}' ";
	$query .= " AND password = '{$password}' ";
	$query .= " LIMIT 1";
	$result_set = mysqli_query($con,$query);

	$user = mysqli_fetch_assoc($result_set);
	$id = $user["adminID"];

	if (mysqli_affected_rows($con) == 1) {
		$_SESSION["id"] = $id;
		redirect_to("admin/dashboard.php");
	} else {
		// username/password combo was not found in the database
		$msg = "Wrong Username or password";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin login </title>
	<link rel="stylesheet" href="css/style.css">

	<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<!-- For-Mobile-Apps-and-Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Simple Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //For-Mobile-Apps-and-Meta-Tags -->

</head>

<body>
    <h1>Admin Portal</h1>
    <h2>
      <p>&nbsp;</p></h2>
    <div class="container w3">
      <h2>Login Now</h2>
		<form action="adminLogIn.php" method="post">
			<div class="username">
				<span class="username">Username:</span>
				<input type="text" name="username" class="name" placeholder="username" required>
				<div class="clear"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Password:</span>
				<input type="password" name="password" class="password" placeholder="Password " required>
				<div class="clear"><?php if (isset($_POST['submit'])){ echo $msg ; } ?></div>
			</div>
			<div class="rem-for-agile">
				<input type="checkbox" name="remember" class="remember">Remember me<br>
				<a href="#">Forgot Password</a><br>
			</div>
			<div class="login-w3">
			  <input type="submit" name ="submit" class="login" value="Login">
			</div>
			<div class="clear">
			 
			</div>
		</form>
	</div>
	<div class="footer-w3l">
		<p> &copy; BusMaster Login Form. All Rights Reserved  
	</div>
</body>
</html>

<?php
function redirect_to( $location = NULL ) {
	if ($location != NULL) {
		header("Location: {$location}");
		exit;
	}
}

?>