<?php

	include("assests/style.php");
	include("connection.php");

		function function_alert($message) {
          echo "<script>alert('$message');</script>";
}
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		
		$email = $_POST['email'];
		$password = $_POST['password'];
		
	$sql = " select * from patients where email = '$email' and password = '$password' ";
	$result = $conn->query($sql);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc())
			{
			session_start();
				$_SESSION['p_id'] = $row['id'];	
			header("location:speciality.php");
			}
		}
		else { 
           function_alert( "Your are not registered on this site, Please First Register you Account"  );		}
	}
	
	
	


	include("assests/header.php");
	include("assests/files.php");
?>

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
<h3>Login <span>Doccure</span></h3>
</div>
<form action=" <?php $_SERVER['PHP_SELF']?>" method="post">
<div class="form-group form-focus">
<input type="text" class="form-control floating" name="email">
<label class="focus-label">Username or Email</label>
</div>
<div class="form-group form-focus">
<input type="password" class="form-control floating" name="password">
<label class="focus-label">Password</label>
</div>
<button class="btn btn-primary w-100 btn-lg login-btn" type="submit">Login</button>
	
	</form>

<div class="login-or">
<span class="or-line"></span>
<span class="span-or">or</span>
</div>
<div class="text-center dont-have">Don’t have an account? <a href="register.php">Register</a></div>
	
	

	
	
	
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

</html>
