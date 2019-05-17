
<?php require_once ("init.php"); ?>
<?php 
 session_start();
 if(!isset($_SESSION["id"])){ redirect_to("login.php") ; }
 
if (isset ( $_POST ['Submit'])) {
	$firstname = $_POST ["firstname"];
	$lastname = $_POST ["lastname"];
	$set_off = $_POST ["set_off"];
	$destination = $_POST ["destination"];
	$luggage = $_POST ["luggage"];
	$date  = $_POST ["date"]." ";
	$date .= $_POST ["time"];
	$email = $_POST ["email"];
	$contact = $_POST ["contact"];
	$checkpoint = $_POST ["checkpoint"];
	$reg_id = $_SESSION["id"];
	
	$query = " insert into booking ( ";
	$query .= " firstname, lastname, set_off, destination, luggage, date, email, contact, checkpoint, reg_id ";
	$query .= " ) VALUES (";
	$query .=  " '{$firstname}','{$lastname}','{$set_off}','{$destination}','{$luggage}','{$date }','{$email}','{$contact}','{$checkpoint}', '{$reg_id}' ";
	$query .= ")";
	$result_set = mysqli_query($con,$query);
	
	
	if ($result_set){
		$message= "Successful";
		redirect_to("Ticket1.php");
	}
	else {
		$message= $query;
	}
}	
	
?>










<!DOCTYPE html>
<!--
Template Name: Legendary
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
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
<li><a href="BusMaster.html">HOME</a></li>
<div class="wrapper row0">
  <div id="topbar" class="clear">
    <div class="fl_left">
      <ul class="nospace inline pushright">
	  <div class="fl_right">
      <ul class="faico clear">
       
      </ul>
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="BusMaster.php">State Intercity BusMaster</a></h1>
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
					
					
					

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <h2>Kindly Fill The Following</h2>
      <!-- ################################################################################################ -->
	  
	  <div class="group btmspace-50 demo">
        <div class="one_half first"><strong>FIRST NAME</strong>:
   <form name="" method="post"   action="AccraTakoradi.php"> 
	    <input type="text" name="firstname" id="firstname" required>
            
			
                                
            </select>
			
			
          
        </div>
        <div class="one_half"><strong>LAST NAME</strong>:

	    <input type="text" name="lastname" id="lastname" required>
            
			
			 
                                
			</select>

         
        </div>
      </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
      <div class="group btmspace-50 demo">
        <div class="one_half first">SET OFF:
          
            <label for="select"></label>
            <select name="set_off" id="select">
			 
                                <option value ="ACCRA">ACCRA</option>
                                <option value ="KUMASI">KUMASI</option>
                                <option value ="SUNYANI">SUNYANI</option>
                                <option value ="TAKORADI">TAKORADI</option>
                                <option value ="HO">HO</option>	
                                <option value ="CAPE COAST">CAPE COAST</option>
                                								
                                <option value ="TARKWA">TARKWA</option>
								<option value ="HOHOE">HOHOE</option>
								<option value ="TAMALE">TAMALE</option>
								<option value ="BOLGATANGA">BOLGATANGA</option>
								<option value ="NAVRONGO">NAVRONGO</option>
								<option value ="PAGA">PAGA</option>
            </select>
			
			
          
        </div>
        <div class="one_half">DESTINATION:
         
            <label for="select2"></label>
            <select name="destination" id="select2">
			                    <option value ="TAKORADI">TAKORADI</option>
                                <option value ="ACCRA">ACCRA</option>
                                
                                <option value ="SUNYANI">SUNYANI</option>
                                <option value ="TAKORADI">TAKORADI</option>
                                <option value ="HO">HO</option>	
                                <option value ="CAPE COAST">CAPE COAST</option>
                                <option value ="ACCRA">ACCRA</option>								
                                <option value ="TARKWA">TARKWA</option>
								<option value ="HOHOE">HOHOE</option>
								<option value ="TAMALE">TAMALE</option>
								<option value ="BOLGATANGA">BOLGATANGA</option>
								<option value ="NAVRONGO">NAVRONGO</option>
								<option value ="PAGA">PAGA</option>
			</select>

          
        </div>
      </div>
      <!-- ################################################################################################ -->
      <h2>&nbsp;</h2>
      <div class="group btmspace-50 demo">
        <div class="one_quarter first">LUGGAGE:
                      <select name="luggage" id="luggage">
			                    <option value ="YES">YES</option>
                                <option value ="YES">NO</option>
								</select>
          
        </div>
		
		
		
		
		
		
        
        <div class="one_quarter">
         
            <label for="select5">            DEPARTURE DATE: </label>
			<input type="date" id="date" name="date"> 
            
            </select>
          
        </div>
        <div class="one_quarter"></div>
      </div>
      <div class="group btmspace-50 demo">
        <div class="one_quarter first">
         
            <label for="select3">TIME</label>

            <select name="time" id="select3">
			 <option value =""> </option>
                                <option value ="04:00:00">4:00Am</option>
                                <option value ="05:00:00">5:00Am</option>
                                <option value ="07:00:00">7:00Am</option>
                                <option value ="08:30:00">8:30Am</option>
                                <option value ="09:00:00">9:00Am</option>	
                                <option value ="09:30:00">9:30Am</option>
                                <option value ="12:30:00">12:30Am</option>								
                                <option value ="13:30:00">1:30Pm</option>
								<option value ="14:30:00">2:30Pm</option>
								<option value ="15:30:00">3:30Pm</option>
								<option value ="17:00:00">5:00Pm</option>
								<option value ="19:30:00">7:30Pm</option>
								<option value ="20:00:00">8:00Pm</option>
            </select>
          
        </div>
        
        <div class="two_quarter">
          
            EMAIL
            <input type="text" name="email" id="email">
          
        </div>
      </div>
      <div class="group btmspace-50 demo">
        <div class="one_quarter first">
          
            CONTACT
            <input type="text" name="contact" id="contact">
          
        </div>
        <div class="three_quarter">
          
            
			<p>
			  <label for="select6">CHECKPOINT FOR PICKUP</label>
			</p>
			<p>
			  <label for="textfield"></label>
			  <input type="text" name="checkpoint" id="textfield">
			</p>
			
 <input name="Submit" type="submit" class="btn" id="Submit" value="Book Now">
 
 <p> <?php if (isset ( $_POST ['Submit'])) { echo $message ; } ?>     </p>
 
 </form>
        
        </div>
      </div>
      <div class="group demo"></div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear">
      <p>&nbsp;</p>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script src="console_runner-5710c30fb566082d9fcb6e7d97ee7e3f2a326128c9f334a4231b6fd752b29965.js"></script><style type="text/css">#maxthon-1eec22d4-0232-4212-8283-6f2ac8f967-iframe{display:block!important;position:absolute!important;visibility:visible!important;z-index:2147483647!important;border-style:none!important;opacity:1!important;margin:0!important;padding:0!important;box-shadow:0 0 5px rgba(0,0,0,.3)!important;border:1px solid #b3b3b3!important}</style><script src="events_runner-d5e4bf42585b8da8c18f7d963dbfc17cd66a79aa586c9448c4de8d6952ee9d97.js"></script><script src="css_live_reload_init-25d1423d5d6fb975e7d61832d2c061422a94963ca446583b965dfc5569147311.js"></script><meta charset="UTF-8"><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="https://production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico"><link rel="mask-icon" type="" href="https://production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111"><link rel="canonical" href="CSS seat booking.html">
<script src="modernizr.js" type="text/javascript"></script>

<meta name="viewport" content="width=device-width">

<style class="cp-pen-styles">*, *:before, *:after {
  box-sizing: border-box;
}

html {
  font-size: 16px;
}

.plane {
  margin: 20px auto;
  max-width: 300px;
}



.exit {
  position: relative;
  height: 50px;
}
.exit:before, .exit:after {
  content: "EXIT";
  font-size: 14px;
  line-height: 18px;
  padding: 0px 2px;
  font-family: "Arial Narrow", Arial, sans-serif;
  display: block;
  position: absolute;
  background: green;
  color: white;
  top: 50%;
  transform: translate(0, -50%);
}
.exit:before {
  left: 0;
}
.exit:after {
  right: 0;
}

.fuselage {
  border-right: 5px solid #d8d8d8;
  border-left: 5px solid #d8d8d8;
}

ol {
  list-style: none;
  padding: 0;
  margin: 0;
}

.seats {
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  justify-content: flex-start;
}

.seat {
  display: flex;
  flex: 0 0 14.28571428571429%;
  padding: 5px;
  position: relative;
}
.seat:nth-child(3) {
  margin-right: 14.28571428571429%;
}
.seat input[type=checkbox] {
  position: absolute;
  opacity: 0;
}
.seat input[type=checkbox]:checked + label {
  background: #bada55;
  -webkit-animation-name: rubberBand;
  animation-name: rubberBand;
  animation-duration: 300ms;
  animation-fill-mode: both;
}
.seat input[type=checkbox]:disabled + label {
  background: #dddddd;
  text-indent: -9999px;
  overflow: hidden;
}
.seat input[type=checkbox]:disabled + label:after {
  content: "X";
  text-indent: 0;
  position: absolute;
  top: 4px;
  left: 50%;
  transform: translate(-50%, 0%);
}
.seat input[type=checkbox]:disabled + label:hover {
  box-shadow: none;
  cursor: not-allowed;
}
.seat label {
  display: block;
  position: relative;
  width: 100%;
  text-align: center;
  font-size: 14px;
  font-weight: bold;
  line-height: 1.5rem;
  padding: 4px 0;
  background: #F42536;
  border-radius: 5px;
  animation-duration: 300ms;
  animation-fill-mode: both;
}
.seat label:before {
  content: "";
  position: absolute;
  width: 75%;
  height: 75%;
  top: 1px;
  left: 50%;
  transform: translate(-50%, 0%);
  background: rgba(255, 255, 255, 0.4);
  border-radius: 3px;
}
.seat label:hover {
  cursor: pointer;
  box-shadow: 0 0 0px 2px #5C6AFF;
}

@-webkit-keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
    transform: scale3d(1.25, 0.75, 1);
  }
  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
    transform: scale3d(0.75, 1.25, 1);
  }
  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
    transform: scale3d(1.15, 0.85, 1);
  }
  65% {
    -webkit-transform: scale3d(0.95, 1.05, 1);
    transform: scale3d(0.95, 1.05, 1);
  }
  75% {
    -webkit-transform: scale3d(1.05, 0.95, 1);
    transform: scale3d(1.05, 0.95, 1);
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}
@keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
    transform: scale3d(1.25, 0.75, 1);
  }
  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
    transform: scale3d(0.75, 1.25, 1);
  }
  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
    transform: scale3d(1.15, 0.85, 1);
  }
  65% {
    -webkit-transform: scale3d(0.95, 1.05, 1);
    transform: scale3d(0.95, 1.05, 1);
  }
  75% {
    -webkit-transform: scale3d(1.05, 0.95, 1);
    transform: scale3d(1.05, 0.95, 1);
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}
.rubberBand {
  -webkit-animation-name: rubberBand;
  animation-name: rubberBand;
}
</style></head><body>
<div class="plane">
  <div class="cockpit">
    <h1>Please select a seat</h1>
  </div>
  <div class="exit exit--front fuselage">
    
  </div>
  <ol class="cabin fuselage">
    <li class="row row--1">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="1A">
          <label for="1A">1A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1B">
          <label for="1B">1B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1C">
          <label for="1C">1C</label>
        </li>
        <li class="seat">
          <input type="checkbox" disabled="" id="1D">
          <label for="1D">Occupied</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1E">
          <label for="1E">1E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1F">
          <label for="1F">1F</label>
        </li>
      </ol>
    </li>
    <li class="row row--2">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="2A">
          <label for="2A">2A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2B">
          <label for="2B">2B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2C">
          <label for="2C">2C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2D">
          <label for="2D">2D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2E">
          <label for="2E">2E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2F">
          <label for="2F">2F</label>
        </li>
      </ol>
    </li>
    <li class="row row--3">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="3A">
          <label for="3A">3A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3B">
          <label for="3B">3B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3C">
          <label for="3C">3C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3D">
          <label for="3D">3D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3E">
          <label for="3E">3E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3F">
          <label for="3F">3F</label>
        </li>
      </ol>
    </li>
    <li class="row row--4">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="4A">
          <label for="4A">4A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4B">
          <label for="4B">4B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4C">
          <label for="4C">4C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4D">
          <label for="4D">4D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4E">
          <label for="4E">4E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4F">
          <label for="4F">4F</label>
        </li>
      </ol>
    </li>
    <li class="row row--5">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="5A">
          <label for="5A">5A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5B">
          <label for="5B">5B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5C">
          <label for="5C">5C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5D">
          <label for="5D">5D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5E">
          <label for="5E">5E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5F">
          <label for="5F">5F</label>
        </li>
      </ol>
    </li>
    <li class="row row--6">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="6A">
          <label for="6A">6A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6B">
          <label for="6B">6B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6C">
          <label for="6C">6C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6D">
          <label for="6D">6D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6E">
          <label for="6E">6E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6F">
          <label for="6F">6F</label>
        </li>
      </ol>
    </li>
    <li class="row row--7">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="7A">
          <label for="7A">7A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7B">
          <label for="7B">7B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7C">
          <label for="7C">7C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7D">
          <label for="7D">7D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7E">
          <label for="7E">7E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7F">
          <label for="7F">7F</label>
        </li>
      </ol>
    </li>
    <li class="row row--8">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="8A">
          <label for="8A">8A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8B">
          <label for="8B">8B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8C">
          <label for="8C">8C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8D">
          <label for="8D">8D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8E">
          <label for="8E">8E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8F">
          <label for="8F">8F</label>
        </li>
      </ol>
    </li>
    <li class="row row--9">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="9A">
          <label for="9A">9A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9B">
          <label for="9B">9B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9C">
          <label for="9C">9C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9D">
          <label for="9D">9D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9E">
          <label for="9E">9E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9F">
          <label for="9F">9F</label>
        </li>
      </ol>
    </li>
    <li class="row row--10">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="10A">
          <label for="10A">10A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10B">
          <label for="10B">10B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10C">
          <label for="10C">10C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10D">
          <label for="10D">10D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10E">
          <label for="10E">10E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10F">
          <label for="10F">10F</label>
        </li>
      </ol>
    </li>
  </ol>
  <div class="exit exit--back fuselage">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    
      <p>
		   
	      </p>
		  <p>
		    <input name="CANCEL" type="reset" class="btn" id="CANCEL" value="Cancel">
		  </p>
		  
</form>
    
  </div>
</div>
<script src="jquery.min.js"></script>
</body></html>
>&nbsp;</p>
    </div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

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