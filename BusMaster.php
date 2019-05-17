<?php session_start();

if(!isset($_SESSION["id"])){ redirect_to("login.php") ; }
?>


<!DOCTYPE html>

<html>
<head>
<title>BusMaster</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear">
    <div class="fl_left">
      <ul class="nospace inline pushright">
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
        <li><a  href="logout.php">Logout</a></li>
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
      <h1><a href="BusMaster.html">State Intercity BusMaster</a></h1>
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
  <nav id="mainav" class="clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li class="active"><a href="BusMaster.html">Home</a></li>
      <li><a class="drop" href="#">Service</a>
        <ul>
          <li><a href="Log in Registration.html">Login/Sign Up</a></li>
          <li><a href="Grab Our Newsletter" class="smoothScroll">Newsletter</a></li>
		  
		

          
         
          <li><a href="gallery.html">Gallery</a></li>
        </ul>
      </li>
      <li><a class="drop" href="#">SCHEDULES</a>
        <ul>
          <li><a href="#">WORKING HOURS</a></li>
          <li><a  href="#">TRIP SCHEDULES </a>
            
          </li>
          <li><a href="#">PAYMENT OPTIONS</a></li>
        </ul>
      </li>
      <li><a class="drop" href="#">BOOKINGS</a>
	  <ul>
	  <li><a href = "#"> SEARCH BUSES</a></li>
	  	  <li><a href="#">TICKET DETAILS</a></li>
		  <li><a href ="More.html"> BUS DETAILS</a></li>
		  <li><a href ="Travel With Us.html"> ROUTES</a>
		  
		  <li><a href ="terms of condition.html"> TERMS AND CONDITIONS </a></li>
		  </ul>
      <li><a href="About.html">ABOUT</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper">
  <div class="flexslider"> 
    <!-- ################################################################################################ -->
    <ul class="slides">
      <li><img src="images/demo/slides/P1.JPG" alt="">
        <div class="txtoverlay">
          <div class="centralise">
            <div class="verticalwrap">
              <article>
                <h2 class="heading uppercase">WELCOME TO INTERCITY STATE TRANSPORT BUSMASTER</h2>
                <p><a class="btn orange pushright" <a href="#"> </a> <a class="btn blue" href="Registration.html"></a></p>
              </article>
            </div>
          </div>
        </div>
      </li>
      <li><img src="images/demo/slides/P011.jpg" alt="">
        <div class="txtoverlay">
          <div class="centralise">
            <div class="verticalwrap">
              <article>
                <h2 class="heading uppercase"></h2>
                
              </article>

            </div>
          </div>
        </div>
      </li>
	  <li><img src="images/demo/slides/Q77.jpg" alt="">
        <div class="txtoverlay">
          <div class="centralise">
            <div class="verticalwrap">
              <article>
                <h2 class="heading uppercase"></h2>
                
              </article>

            </div>
          </div>
        </div>
      </li>
     <li><img src="images/demo/slides/Q2.jpg" alt="">
        <div class="txtoverlay">
          <div class="centralise">
            <div class="verticalwrap">
              <article>
                <h2 class="heading uppercase"></h2>
               
              </article>

            </div>
          </div>
        </div>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <h2><strong>TRAVEL WITH US</h2></strong>
    <p>Intercity STC Coaches LTD is purchasing more luxuary buses for intercity passengers..</p>
    <ul class="nospace group capitalise figblock">
      <li class="one_quarter first"><a href="AccraTakoradi.html">BOOK NOW</a>
	  <figure class="borderedbox"><img src="images/demo/000.JPG" alt="">
          <figcaption class="inspace-15">ACCRA - CAPE COAST/TAKORADI</figcaption>
        </figure>
        </a></li>
      <li class="one_quarter"><a href="AccraKumasi.html">BOOK NOW</a>
        <figure class="borderedbox"><img src="images/demo/014.JPG" alt="">
          <figcaption class="inspace-15">ACCRA - KUMASI </figcaption>
        </figure>
        </a></li>
      <li class="one_quarter"><a href="AccraTamale.html">BOOK NOW</a>
        <figure class="borderedbox"><img src="images/demo/001.JPG" alt="">
          <figcaption class="inspace-15">ACCRA - TAMALE</figcaption>
        </figure>
        </a></li>
      <li class="one_quarter"><a href="replica.php">BOOK NOW</a>
        <figure class="borderedbox"><img src="images/demo/010.JPG" alt="">
          <figcaption class="inspace-15">PRIVATE BOOKING </figcaption>
        </figure>
        </a></li>
		
    </ul>
    <!-- ################################################################################################ -->
    <!-- / main body -->
	
	
	
	
	
	
    <div class="clear"></div>
  </main>
</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div class="wrapper row4">
  <div id="latest" class="clear"> 

 
 
	
    <div class="one_third first">
	      <article>
	  <div class="slidehshow-container "> 
	  
	  <h2><a href="http://:ghanaweb.com/"><strong> NEWS AND EVENTS </a></h2></strong>
		<marquee direction="up" scrollamount="2" height="180">
		<br>21 Aug 2013</br>
        <p>New Website Launched for Intercity STC Coaches LTD providing online real time booking experience for travellers. Oyawego has provided technology for the facility.<br />
        <br />
        </p>
        <br>14 Aug 2013</br>
        <p>Intercity STC Coaches LTD is purchasing more luxuary buses for intercity passengers. </p>
		<br>21 Aug 2013</br>
        <p>New Website Launched for Intercity STC Coaches LTD providing online real time booking experience for travellers. Oyawego has provided technology for the facility.<br />
        <br />
        </p>
        <br>14 Aug 2013</br>
        <p>Intercity STC Coaches LTD is purchasing more luxuary buses for intercity passengers. </p>
		</marquee>
        
      </article>
	  
    </div>
	
    <div class="two_third">
	
      <ul class="nospace clear latestposts">
        <li>
          <figure><a href="#"><img src="images/111.jpg" width="625" height="230"></a>
            <figcaption>

              <div class="ccnt">
                <h4 class="heading"><a href="AccraTakoradi.html">ACCRA - TAKORADI</a></h4>
                <ul class="nospace meta">
                  <li><i class="fa fa-calendar"></i>
                    <time datetime="2045-04-06">06/04/2017</time>
                  </li>
                  <li><i class="fa fa-tags"></i> <a href="replica.html" rel="tag">BOOK TICKET</a></li>
                </ul>
              </div>
            </figcaption>
          </figure>
        </li>
        <li>
          <figure><a href="#"><img src="images/222.jpg" width="625" height="230"></a>
            <figcaption>
              <div class="ccnt">
                <h4 class="heading"><a href="AccraKumasi">ACCRA - KUMASI</a></h4>
                <ul class="nospace meta">
                  <li><i class="fa fa-calendar"></i>
                    <time datetime="2045-04-06">06/04/2017</time>
                  </li>
                  <li><i class="fa fa-tags"></i> <a href="replica.html"  rel="tag">BOOK TICKET</a></li>
                </ul>
              </div>
            </figcaption>
          </figure>
        </li>
        <li>
          <figure><a href="#"><img src="images/333.jpg" width="625" height="230"></a>
            <figcaption>
              <div class="ccnt">
                <h4 class="heading"><a href="AccraTamale">ACCRA - TAMALE</a></h4>
                <ul class="nospace meta">
                  <li><i class="fa fa-calendar"></i>
                    <time datetime="2045-04-06">06/04/2017</time>
                  </li>
                  <li><i class="fa fa-tags"></i> <a href="replica.html"  rel="tag">BOOK TICKET</a></li>
                </ul>
              </div>
            </figcaption>
          </figure>
        </li>
        <li>
          <figure><a href="#"><img src="images/444.jpg" width="625" height="230"></a>
            <figcaption>
              <div class="ccnt">
                <h4 class="heading"><a href="#">ACCRA - TARKWA</a></h4>
                <ul class="nospace meta">
                  <li><i class="fa fa-calendar"></i>
                    <time datetime="2045-04-06">06/04/2017</time>
                  </li>
                  <li><i class="fa fa-tags"></i> <a href="replica.html"  rel="tag">BOOK TICKET</a></li>
                </ul>
              </div>
            </figcaption>
          </figure>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section class="container clear center"> 
    <!-- ################################################################################################ -->
    <h2 class="heading uppercase">Help Features</h2>
    <ul class="nospace group">
      <li class="one_quarter first"><i class="fa fa-3x fa-support"></i>
        <p></p>
        <p><a href="Help.html">Help</a></p>
      </li>
      <li class="one_quarter"><i class="fa fa-3x fa-camera"></i>
        <p></p>
        <p><a href="gallery.html">Gallery</a></p>
      </li>
      <li class="one_quarter"><i class="fa fa-3x fa-bus"></i>
        <p> </p>
        <p><a href="Travel With Us.html">ROUTES</a></p>
      </li>
      <li class="one_quarter"><i class="fa fa-3x fa-legal"></i>
        <p> </p>
        <p><a href="terms of condition.html">Terms and Conditions</a></p>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <footer id="footer" class="clear"> 
    <!-- ################################################################################################ -->
    <div class="group center btmspace-80">
      <div class="one_third first"><i class="icon blue fa fa-map-marker"></i>
        <h6 class="nospace"><a href="#">Locate Us</a></h6>
        <p class="nospace smallfont">Circle off the Mechanical Lloyd road</p>
      </div>
      <div class="one_third"><i class="icon red fa fa-phone"></i>
        <h6 class="nospace">Call Us</h6>
        <p class="nospace smallfont">+00 (123) 456 7890</p>
      </div>
      <div class="one_third"><i class="icon orange fa fa-envelope-o"></i>
        <h6 class="nospace">Message Us</h6>
        <p class="nospace smallfont">info@domain.com</p>
      </div>
    </div>
    <!-- ################################################################################################ -->
    <hr class="btmspace-80">
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="title">Address</h6>
      <address class="btmspace-15">
      State INTERCITY BusMaster<br>
      Adjuma Cres &amp;No.1 <br>
      ACCRA<br>
      P.O.BOX AC 4356
      </address>
      <ul class="nospace">
        <li class="btmspace-10"><span class="fa fa-phone"></span> +00 (123) 456 7890</li>
        <li><span class="fa fa-envelope-o"></span> info@domain.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title"></h6>
      <ul class="nospace linklist">
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title"></h6>
      <article>
        <h2 class="nospace"><a href="#"></a></h2>
        <time class="smallfont" datetime="2045-04-06"><sup></sup> </time>
        <p></p>
      </article>
    </div>
    <div class="one_quarter">
      
	  <h6><a id="Grab Our Newsletter">Grab Our Newsletter.</a></h6>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row6">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - <a href="#">www.BusMaster.com</p>
    
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
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