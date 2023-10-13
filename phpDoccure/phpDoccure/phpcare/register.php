
	<?php
	include("connection.php");
	include("assests/style.php");
	include("assests/header.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		$name = val($_POST['name']);
		$age = val($_POST['age']);
		$city = val($_POST['city']);
		$email = val($_POST['email']);
		$phone = val($_POST['phone']);
		$pass = val($_POST['pass']);
		
		if(empty($name)|| empty($email)||empty($phone)||empty($pass)){  }
		else{
		$sql = "insert into patients values ('' , '$name' , '$age' , '$city' , '$email' , '$phone' , '$pass')";
		if($conn->query($sql) === true){
			header("location:index.php");
		}
			
		}

	}
	?>
<?php
	include("assests/files.php");
?>


	
<body class="account-page">

<div class="main-wrapper">

<div class="content top-space">
<div class="container">
<div class="row">
<div class="col-md-8 offset-md-2">

<div class="account-content">
<div class="row align-items-center justify-content-center">
<div class="col-md-7 col-lg-6 login-left">
<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Register">
</div>
<div class="col-md-12 col-lg-6 login-right">
<div class="login-header">
<h3>Patient Register</h3>
</div>

	<?php
	function val($data){
	$data = htmlspecialchars($data);
	$data = trim($data);
	$data = stripslashes($data);
	return $data;
	}


	
	?>
	
	
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<div class="form-group form-focus">
<input type="text" class="form-control floating" name="name">
<label class="focus-label">Full Name</label>
</div>
<div class="form-group form-focus">
<input type="number" class="form-control floating" name="age">
<label class="focus-label">Age</label>
</div>
<div class="form-group form-focus">
<input type="text" class="form-control floating" name="city">
<label class="focus-label">City</label>
</div>
<div class="form-group form-focus">
<input type="text" class="form-control floating" name="email">
<label class="focus-label">Username or Email</label>
</div>
<div class="form-group form-focus">
<input type="text" class="form-control floating" name="phone" >
<label class="focus-label">Mobile Number</label>
</div>
<div class="form-group form-focus">
<input type="password" class="form-control floating" name="pass">
<label class="focus-label">Create Password</label>
</div>
<button class="btn btn-primary w-100 btn-lg login-btn" type="submit" name="submit">Signup</button>
	
</form>

<div class="login-or">
<span class="or-line"></span>
<span class="span-or">or</span>
</div>
<div class="text-center">
<a class="forgot-link" href="login.php">Already have an account?</a>
</div>
	


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
<p><i class="feather-mail"></i> <a href="https://doccure.dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bdd9d2dedec8cfd8fdd8c5dcd0cdd1d893ded2d0">[email&#160;protected]</a></p>
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