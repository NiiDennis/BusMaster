<?php require_once ("init.php"); ?>
<?php
session_start();
 if(!isset($_SESSION["id"])){ redirect_to("login.php") ; }
 
 $user = $_SESSION["id"];
$query = "select *  ";
	$query .= " FROM booking  ";
	$query .= " WHERE reg_id = '{$user}' ";
		$query .= " ORDER BY `booking`.`Book_id` DESC LIMIT 1";
	$result_set = mysqli_query($con,$query);

	$user = mysqli_fetch_assoc($result_set);





?>













<!DOCTYPE html>


<html>
<head>
<title>BusMaster</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">
div {
	font-family: Lucida Console, Monaco, monospace;
}
</style>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<li><a href="#"></a></li>
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
                        <h1>&nbsp;</h1>
                        <p>&nbsp;</p>
                        <form name="form2" method="post" action="">
                        </form>
                        <table width="95%" height="224" border="4" cellpadding="2" cellspacing="2">
                          <tr>
                            <td width="124">SEAT NO</td>
                            <td colspan="4"> <div align="center">STATE INTERCITY BUSMASTER </div></td>
                            <td width="180" rowspan="3"><p>BAR CODE</p>
                            <p><img src="images/qrcode.jpg" alt="" width="126" height="113"></p></td>
                          </tr>
                          <tr>
                            <td rowspan="2" align="center" valign="middle" class="fa-4x"><p>&nbsp;</p>
                            <p><strong>45</strong></p></td>
                            <td height="100" colspan="2"><p>SET OFF:</p>
                            <p><?php echo $user['set_off'];?></p></td>
                            <td width="223" rowspan="2"><p align="center">DATE + TIME</p>
                            <p align="center"><?php echo $user['date'];?> GMT</p>
                            <p align="center"><img src="Nova driver details/images/logo.png" width="213" height="42"></p></td>
                            <td width="226"><p>DESTINATION</p>
                            <p><?php echo $user['destination'];?></p></td>
                          </tr>
                          <tr>
                            <td height="26" colspan="2">BUS NO:</td>
                            <td>DRIVER Name:</td>
                          </tr>
                          <tr>
                            <td height="50">PICK UP:
							<p><?php echo $user['checkpoint'];?></p></td>
                            <td width="179">NAME:</td>
                            <td colspan="3"><?php echo $user['firstname']." ".$user['lastname']  ;?></td>
                            <td>PAID</td>
                          </tr>
                        </table>
                        <p>&nbsp; </p>
                        <form name="form1" method="post" action="">
                          <p>Looking Forward to TRAVELLING With  You AGAIN!</p>
                          <p>SAFE JOURNEY!</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		
        <div class="container"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work-with   wow fadeInUp animated">
                        <h3>&nbsp;</h3>
                    </div>
                </div>
            </div>
        </div>
  </section>
<div class="one_third"><i class="icon orange fa fa-envelope-o"></i>
    <h6 class="nospace">&nbsp;</h6>
</div>
</div>
    <!-- ################################################################################################ --><!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="title">&nbsp;</h6>
</div>
    <a href="#"></a>
    <div class="one_quarter">
      <ul class="nospace linklist">
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
      <h6 class="title">&nbsp;</h6>
    </div>
    <!-- ################################################################################################ -->
  </footer>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row6">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_right">&nbsp;</p>
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