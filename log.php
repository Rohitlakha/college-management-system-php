<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />

<meta name="author" content="https://www.cymolthemes.com/" />
<meta name="viewport" content=" width=device-width, initial-scale=1, maximum-scale=1" />
<title>Digitech insitute</title>

<!-- favicon icon -->
<link rel="shortcut icon" href="images/favicon.png" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

<!-- animate -->
<link rel="stylesheet" type="text/css" href="css/animate.css"/>

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>

<!-- themify -->
<link rel="stylesheet" type="text/css" href="css/themify-icons.css"/>

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="css/flaticon.css"/>

<!-- slick -->
<link rel="stylesheet" type="text/css" href="css/slick.css">

<!-- REVOLUTION LAYERS STYLES -->

    <link rel='stylesheet' id='rs-plugin-settings-css' href="revolution/css/rs6.css"> 

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="css/shortcodes.css"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="css/main.css"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="css/megamenu.css"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>


</head>


<body>
<section>
    <div id="page-wrapper" style="background-image:url(images/slides/slider-mainbg-003.jpg); background-size:100% 100%;">
			<div class="main-page login-page ">
				<h2 class="title1">Login</h2>
				<div class="widget-shadow">
					<div class="login-body">
					
						<form action="" method="post">
							<input type="email" class="user" name="t1" placeholder="Enter Your Email" required="">
							<input type="password" name="t2" class="lock" placeholder="Password" required="">
							
							<input type="submit" name="s1" value="Login" style="background-color:#80cd36">
							
						</form>
					</div>
				</div>
				
			</div>
		</div>
		</section>
		<section class="footer-info">
		<div class="row">
		<div class="col-md-4"><p style="font-size:20px; font-weight:bold"> Address : </p>
		<span style="font-size:14px"> Digitech Institute Phagwara,144401</span>
		</div>
		<div class="col-md-4"><p style="font-size:20px; font-weight:bold">Contact us : </p>
		<span style="font-size:14px"> 84377-58754, 94641-69442, 7691-91746</span>
		
		</div><div class="col-md-4"><img src="images/slides/DIGITECH-LOGO-LIGHT-1.png" height="50px"></div>
		</div>
		</section>
	<?php 
     include('include/config.php');

      if(isset($_POST['s1']))
      {
	 $i=0;
	$useremail=$_POST['t1'];
     $userpass=$_POST['t2'];
	$connection=mysqli_connect($host,$user,$password,$db);
	if($connection)
{
     $result = mysqli_query($connection, "SELECT * FROM logintable");
    if (mysqli_num_rows($result) > 0) 
    {
  
  while($row = mysqli_fetch_assoc($result)) {

      if($row["username"]==$useremail && $row["password"]==$userpass)
    {$i=1;
	 echo "<script>alert('Welcome User');</script>";
	} }
    if($i==1)
    {
       
     echo"<script>window.location.href = 'admin/managerecord.php';</script>";
    }
    else{echo "<h4>Invalid Details<h4>";
    }
    } else {
     echo "no result found";
   }
   mysqli_close($connection);
}}
   ?>	
  
    <!-- Javascript -->

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.easing.js"></script>    
    <script src="js/jquery-waypoints.js"></script>    
    <script src="js/jquery-validate.js"></script> 
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/numinate.min.js"></script>
    <script src="js/imagesloaded.min.js"></script>
    <script src="js/jquery-isotope.js"></script>
    <script src="js/main.js"></script>

    <!-- Revolution Slider -->
    
    <script src="revolution/js/slider.js"></script>

    <!-- SLIDER REVOLUTION 6.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    

    <script  src='revolution/js/revolution.tools.min.js'></script>
    <script  src='revolution/js/rs6.min.js'></script>

    <!-- Javascript end-->

</body>

<!-- Mirrored from www.cymolthemes.com/html//tripzia/home-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Dec 2020 06:24:14 GMT -->
</html>