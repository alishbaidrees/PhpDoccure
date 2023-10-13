<?php

	include("assests/style.php");
	include("assests/header.php");
	include("assests/files.php");
	include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Doccure</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	
</head>
	
<body>

<div class="main-wrapper">



<div class="breadcrumb-bar-two">
<div class="container">
<div class="row align-items-center inner-banner">
<div class="col-md-12 col-12 text-center">
<h2 class="breadcrumb-title">Contact Us</h2>
<nav aria-label="breadcrumb" class="page-breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item" aria-current="page">Contact Us</li>
</ol>
</nav>
</div>
</div>
</div>
</div>


<section class="contact-section">
<div class="container">
<div class="row">
<div class="col-lg-5 col-md-12">
<div class="section-inner-header contact-inner-header">
<h6>Get in touch</h6>
<h2>Have Any Question?</h2>
</div>
<div class="card contact-card">
<div class="card-body">
<div class="contact-icon">
<i class="feather-map-pin"></i>
</div>
<div class="contact-details">
<h4>Address</h4>
<p>Karachi / Pakistan -</p>
</div>
</div>
</div>
<div class="card contact-card">
<div class="card-body">
<div class="contact-icon">
<i class="feather-phone"></i>
</div>
<div class="contact-details">
<h4>Phone Number</h4>
<p >+92 3123 123456</p>
</div>
</div>
</div>
<div class="card contact-card">
<div class="card-body">
<div class="contact-icon">
<i class="feather-mail"></i>
</div>
<div class="contact-details">
<h4>Email Address</h4>
<p><a class="__cf_email__" data-cfemail="b6d2d9d5d5c3c4d3f6d3ced7dbc6dad398d5d9db">[email&#160;protected]</a></p>
</div>
</div>
</div>
</div>
<div class="col-lg-7 col-md-12 d-flex">
<div class="card contact-form-card w-100">
<div class="card-body">
<form action="" method="post">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" placeholder="Enter Your Name" name="name">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Email Address</label>
<input type="email" name="email" class="form-control" placeholder="Enter Email Address">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Phone Number</label>
<input type="text" class="form-control" placeholder="Enter Phone Number" value="+92 " name="phone" >
</div>
</div>

<div class="col-md-12">
<div class="form-group">
<label>Message</label>
<textarea class="form-control" placeholder="Enter your comments" name="msg"></textarea>
</div>
</div>
	<?php
	
function val($data){
	$data = htmlspecialchars($data);
	$data = trim($data);
	$data = stripslashes($data);
	return $data;
}
if(isset($_POST['submit'])){
$name = val($_POST['name']);	
$email = val($_POST['email']);	
$phone = val($_POST['phone']);	
$msg = val($_POST['msg']);	
	
	$sql = "insert into contact values ('' , '$name' , '$email' , '$phone' , '$msg')";
	if($conn->query($sql))
	{
		
	}
	
	
	
	
}

?>

<div class="col-md-12">
<div class="form-group form-group-btn mb-0">
<button type="submit" class="btn btn-primary prime-btn" name="submit">Send Message</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="contact-map d-flex">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14466.136769377172!2d67.0652637!3d24.9819581!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb340e584b891c3%3A0x29b2cbc198ba2dbd!2sAptech%20Computer%20Education%20North%20Karachi%20Center!5e0!3m2!1sen!2s!4v1688833872018!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></section>


<footer class="footer footer-one">
<div class="footer-top">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-4">
<div class="footer-widget footer-about">
<div class="footer-logo">
<img src="assets/img/logo.png" alt="logo">
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
<li><a href="search.html">Search for Doctors</a></li>
<li><a href="login.html">Login</a></li>
<li><a href="register.html">Register</a></li>
</ul>
</div>
</div>
<div class="col-lg-2 col-md-4">
<div class="footer-widget footer-menu">
<h2 class="footer-title">For Doctors</h2>
<ul>
<li><a href="appointments.html">Appointments</a></li>
<li><a href="chat.html">Chat</a></li>
<li><a href="login.html">Login</a></li>
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
<p><i class="feather-mail"></i> <a href="https://doccure.dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b1d5ded2d2c4c3d4f1d4c9d0dcc1ddd49fd2dedc">[email&#160;protected]</a></p>
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
<li><a href="privacy-policy.html">Privacy Policy</a></li>
<li><a href="terms-condition.html">Terms and Conditions</a></li>
</ul>
</div>

</div>
</div>
</div>

</div>
</div>
</footer>

</div>




</body>

<!-- Mirrored from doccure.dreamguystech.com/html/template/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Jun 2023 12:11:46 GMT -->
</html>