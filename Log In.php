<?php require_once('Connections/BusMaster.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form")) {
  $insertSQL = sprintf("INSERT INTO ``log in`` (Password) VALUES (%s)",
                       GetSQLValueString($_POST['password'], "text"));

  mysql_select_db($database_BusMaster, $BusMaster);
  $Result1 = mysql_query($insertSQL, $BusMaster) or die(mysql_error());

  $insertGoTo = "BusMaster.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form")) {
  $insertSQL = sprintf("INSERT INTO ``log in`` (user_id, Password) VALUES (%s, %s)",
                       GetSQLValueString($_POST['name'], "double"),
                       GetSQLValueString($_POST['password'], "text"));

  mysql_select_db($database_BusMaster, $BusMaster);
  $Result1 = mysql_query($insertSQL, $BusMaster) or die(mysql_error());

  $insertGoTo = "BusMaster.html";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

$colname_Recordset1 = "-1";
if (isset($_GET['user_id'])) {
  $colname_Recordset1 = $_GET['user_id'];
}
mysql_select_db($database_BusMaster, $BusMaster);
$query_Recordset1 = sprintf("SELECT * FROM `log in` WHERE user_id = %s", GetSQLValueString($colname_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $BusMaster) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
	<title>STATE INTERCITY BUSMASTER </title>
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
    <h1>State Intercity BusMaster</h1>
    <div class="container w3">
        <h2>Login Now</h2>
		<form name="form" action="<?php echo $editFormAction; ?>" method="POST">
			<div class="username">
				<span class="username">Username:</span>
				<input name="name" type="text" required class="name" placeholder="" value="<?php echo $row_Recordset1['UserName']; ?>">
				<div class="clear"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Password:</span>
				<input name="password" type="password" required class="password" placeholder="" value="<?php echo $row_Recordset1['Password']; ?>">
				<div class="clear"></div>
			</div>
			<div class="rem-for-agile">
				<input type="checkbox" name="remember" class="remember">Remember me<br>
				<a href="#">Forgot Password</a><br>
			</div>
			<div class="login-w3">
			  <input type="submit" class="login" value="Login">
			</div>
			<div class="clear">
			  <div class="ennzy">
			    <p>&nbsp;</p>
			    <p><a href="Registration.html" class="wew">REGISTER NOW</a></p>
			    <p>&nbsp;</p>
			  </div>
			</div>
			<input type="hidden" name="MM_insert" value="form">
		</form>
	</div>
	<div class="footer-w3l">
		<p> &copy; BusMaster Login Form. All Rights Reserved  
	</div>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
