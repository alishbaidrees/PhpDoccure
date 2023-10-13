<?php

	include("assests/style.php");
	include("assests/header.php");
	include("connection.php");




?>
	<?php
	
	if($_SERVER['REQUEST_METHOD']==="POST"){
		
	if(isset($_FILES['card_img'])){
		$filename = $_FILES['card_img']['name'];
		$filetype = $_FILES['card_img']['type'];
		$filesize = $_FILES['card_img']['size'];
		$tmp_name = $_FILES['card_img']['tmp_name'];

$location = "assets/img/doctors/".$filename;

if(move_uploaded_file($tmp_name , $location)){
	 echo "Your Data ";
}
else{
	echo "location error";
}
		
		
		
		
		$name=$_POST['name'];
		$age=$_POST['age'];
		$specs=$_POST['specs'];
		$time1=$_POST['time1'];
		$time2=$_POST['time2'];
		$day1=$_POST['day1'];
		$day2=$_POST['day2'];
		$city=$_POST['city'];
		$country=$_POST['country'];
		$password=$_POST['pass'];
		$sql="insert into doctors values('','$name','$age','$specs','$time1','$time2','$day1','$day2','$city','$country','$location','$password') ";
		if($conn->query($sql)===TRUE){
			header("location:doctor-dashboard.php");
			
			
		}
		
			}
	}
	include("assests/header.php");
		include("assests/files.php");
	?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Doccure</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	
	
</head>
<body class="account-page">

<div class="main-wrapper">



<div class="content top-space">
<div class="container-fluid">
<div class="row">
<div class="col-md-8 offset-md-2">

<div class="account-content">
<div class="row align-items-center justify-content-center">
<div class="col-md-7 col-lg-6 login-left">
<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Login">
</div>
<div class="col-md-12 col-lg-6 login-right">
<div class="login-header">
<h3>Register <span>Doccure</span> as a Doctor</h3>
</div>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
<div class="form-group form-focus">
<input type="file" name="card_img" class="form-control floating">
</div>
<div class="form-group form-focus">
<input type="text" name="name" class="form-control floating">
<label class="focus-label">Name</label>
</div>
	<div class="form-group form-focus">
<input type="number" name="age" class="form-control floating">
<label class="focus-label">age</label>
</div>
<div class="form-group form-focus">

	<select name="specs">
	<option value="none" selected disabled hidden>Choose Speciality</option>
	<option value="9">Cardiology</option>
	<option value="10">Neurology</option>
	<option value="11">Uroology</option>
	<option value="12">Opthalmology</option>
	<option value="13">Orthopedic</option>
	
	</select>
</div>
<div class="form-group form-focus">
<input type="number" name="time1" class="form-control floating">
<label class="focus-label">Starting Time</label>
</div>
<div class="form-group form-focus">
<input type="number" name="time2" class="form-control floating">
<label class="focus-label">Ending Time</label>
</div>
<div class="form-group form-focus">
<input type="text" name="day1" class="form-control floating">
<label class="focus-label">Day 1</label>
</div>
<div class="form-group form-focus">
<input type="text" name="day2" class="form-control floating">
<label class="focus-label">Day 2</label>
</div>
<div class="form-group form-focus">
<input type="text" name="city" class="form-control floating">
<label class="focus-label">City</label>
</div>
<div class="form-group form-focus">
<input type="text" name="country" class="form-control floating">
<label class="focus-label">Country</label>
</div>
<div class="form-group form-focus">
<input type="text" name="pass" class="form-control floating">
<label class="focus-label">Password</label>
</div>
<div class="text-end">
<a class="forgot-link" href="dashboard_login.php">Already have an account?</a>
</div>
<button class="btn btn-primary w-100 btn-lg login-btn" type="submit" >Signup</button>
<div class="login-or">

</div>

</form>
	
</div>
	
	
	
</div>
</div>

</div>
</div>
</div>
</div>


<footer class="footer footer-one">
<div class="footer-top">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-4">
<div class="footer-widget footer-about">
<div class="footer-logo">
<img src="file:///C|/xampp/htdocs/muskan/assets/img/logo.png" alt="logo">
</div>
<div class="footer-about-content">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</div>
</div>
</div>
<div class="col-lg-2 col-md-4">
<div class="footer-widget footer-menu">
<h2 class="footer-title">For Patients</h2>
<ul>
<li><a href="file:///C|/xampp/htdocs/muskan/search.html">Search for Doctors</a></li>
<li><a href="file:///C|/xampp/htdocs/muskan/login.html">Login</a></li>
<li><a href="file:///C|/xampp/htdocs/muskan/register.html">Register</a></li>
</ul>
</div>
</div>
<div class="col-lg-2 col-md-4">
<div class="footer-widget footer-menu">
<h2 class="footer-title">For Doctors</h2>
<ul>
<li><a href="file:///C|/xampp/htdocs/muskan/appointments.html">Appointments</a></li>
<li><a href="file:///C|/xampp/htdocs/muskan/chat.html">Chat</a></li>
<li><a href="file:///C|/xampp/htdocs/muskan/login.html">Login</a></li>
</ul>
</div>
</div>
<div class="col-lg-2 col-md-5">
<div class="footer-widget footer-contact">
<h2 class="footer-title">Contact Us</h2>
<div class="footer-contact-info">
<div class="footer-address">
<p><i class="feather-map-pin"></i> 3556 Beech Street, USA</p>
</div>
<div class="footer-address">
<p><i class="feather-phone-call"></i> +1 315 369 5943</p>
</div>
<div class="footer-address mb-0">
<p><i class="feather-mail"></i> <a href="https://doccure.dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a8ccc7cbcbdddacde8cdd0c9c5d8c4cd86cbc7c5">[email&#160;protected]</a></p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-7">
<div class="footer-widget">
<h2 class="footer-title">Join Our Newsletter</h2>
<div class="subscribe-form">
<form action="#">
<input type="email" class="form-control" placeholder="Enter Email">
<button type="submit" class="btn">Submit</button>
</form>
</div>
<div class="social-icon">
<ul>
<li>
<a href="javascript:;" target="_blank"><i class="fab fa-facebook"></i> </a>
</li>
<li>
<a href="javascript:;" target="_blank"><i class="fab fa-instagram"></i></a>
</li>
<li>
<a href="javascript:;" target="_blank"><i class="fab fa-twitter"></i> </a>
</li>
<li>
<a href="javascript:;" target="_blank"><i class="fab fa-linkedin-in"></i></a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="footer-bottom">
<div class="container">

<div class="copyright">
<div class="row">
<div class="col-md-6 col-lg-6">
<div class="copyright-text">
<p class="mb-0"> Copyright © 2023 <a href="https://themeforest.net/user/dreamguys/portfolio" target="_blank">Dreamguys.</a> All Rights Reserved</p>
</div>
</div>
<div class="col-md-6 col-lg-6">

<div class="copyright-menu">
<ul class="policy-menu">
<li><a href="file:///C|/xampp/htdocs/muskan/privacy-policy.html">Privacy Policy</a></li>
<li><a href="file:///C|/xampp/htdocs/muskan/terms-condition.html">Terms and Conditions</a></li>
</ul>
</div>

</div>
</div>
</div>

</div>
</div>
</footer>

</div>

<?php
	
	?>	
	
</body>

</html>
