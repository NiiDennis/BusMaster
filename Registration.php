<?php require_once ("init.php"); ?>
<?php 

if (isset ( $_POST ['Submit'])) {
	$firstname = $_POST ["firstname"];
	$lastname = $_POST ["lastname"];
	$password = $_POST ["password"];
	$contact = $_POST ["contact"];
	$email = $_POST ["email"];
	
	$query = " insert into registration ( ";
	$query .= " firstname, lastname, password, contact,email ";
	$query .= " ) VALUES (";
	$query .=  " '{$firstname}','{$lastname}','{$password}','{$contact}','{$email}' ";
	$query .= ")";
	$result_set = mysqli_query($con,$query);
	
	
	if ($result_set){
		$message= "Successful";
		redirect_to("login.php");
	}
	else {
		$message="Unsuccessfull".mysqli_error($con);
	}
}	
	
?>


<!DOCTYPE html>

<html>
<head>
<title>BusMaster</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="css/normalize.css">
<link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/main.css">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div class="wrapper row0">
  <div id="topbar" class="clear">
    <div class="fl_left">
      <ul class="nospace inline pushright">
	  <div class="fl_right">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
      </ul>
    </div>
  </div>
</div>

<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html">State Intercity BusMaster</a></h1>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li><strong>Working Hours:</strong><br>
          Mon - Sat: 9am to 5.00pm</li>
        <li><strong>Have A Chat:</strong><br>
          +00 (123) 456 7890</li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>

<section class="contact" id="CONTACT">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="contact_title  wow fadeInUp animated">
                        
						
                         <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

      <form action="Registration.php" method="post">
        
        <h1>Kindly Fill The Forms</h1>
        
        <fieldset>
          
          <legend><span class="number">1</span> Your basic info</legend>
          <div>
                                <label for="firstname">FirstName:</label>                                            
                                <input type="text" id="firstname" name="firstname" required>
								
								<label for="lastname">LastName:</label>                                            
                                <input type="text" id="lastname" name="lastname" required>
								
								 <label for="password">Password:</label>
          <input type="password" id="password" name="password">
								
								
								<label for="Contact">Contact:</label>                                            
                                <input type="text" id="contact" name="contact" required>
          
                                <label for="mail">Email:</label>
                                <input type="email" id="email" name="email" required>
								
								
         
          
          
        
        
        
              
        
                      
    
		</div>
          
        

		
		  <p>
		    <input name="Submit" type="submit" class="btn" id="Submit" value="Register">
	      </p>
		  <p>
		    <input name="CANCEL" type="reset" class="btn" id="CANCEL" value="Cancel">
		  </p>
		  <p> <?php if (isset ( $_POST ['Submit'])) { echo $message ; } ?>     </p>
</form>
		
        
      
               
<html>
   
      
    </body>
</html>










                                                          
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
    function redirect_to( $location = NULL ) {
    if ($location != NULL) {
        header("Location: {$location}");
        exit;
    }
}

    ?>