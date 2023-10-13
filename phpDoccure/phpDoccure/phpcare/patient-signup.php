<?php

	include("assests/style.php");
	include("assests/header.php");
	include("assests/files.php");
	include("connection.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
<title>Doccure</title>

	
</head>
<body class="login-body">

<div class="main-wrapper">


<div class="login-content-info">
<div class="container">

<div class="row justify-content-center">
<div class="col-lg-4 col-md-6">
<div class="account-content">
<div class="login-shapes">
<div class="shape-img-left">
<img src="assets/img/shape-01.png" alt>
</div>
<div class="shape-img-right">
<img src="assets/img/shape-02.png" alt>
</div>
</div>
<div class="account-info">
<div class="login-back">
<a href="signup.html"><i class="fa-solid fa-arrow-left-long"></i> Back</a>
</div>
<div class="login-title">
<h3>Patient Signup</h3>
<p class="mb-0">Welcome back! Please enter your details.</p>
</div>
<form action="https://doccure.dreamguystech.com/html/template/signup-success.html">
<div class="form-group">
<label>Phone Number</label>
<input class="form-control form-control-lg group_formcontrol form-control-phone" id="phone" name="phone" type="text">
</div>
<div class="form-group">
<label>First Name</label>
<input type="text" class="form-control" placeholder="Enter Your First Name">
</div>
<div class="form-group">
<label>Last Name</label>
<input type="text" class="form-control" placeholder="Enter Your Last Name">
</div>
<div class="form-group form-check-box terms-check-box">
<div class="form-group-flex">
<label class="custom_check">
I have read and agree to Doccure’s <a href="javascript:void(0);">Terms of Service</a> and <a href="javascript:void(0);">Privacy Policy.</a>
<input type="checkbox" name="Terms">
<span class="checkmark"></span>
</label>
</div>
</div>
<div class="form-group">
<button class="btn btn-block" type="submit">Register Now</button>
</div>
<div class="form-group back-btn-light">
<button class="btn btn-light btn-block" type="submit">Create an Account</button>
</div>
<div class="account-signup">
<p>Already a Member? <a href="login-email.html">Sign in</a></p>
</div>
</form>
</div>
</div>
</div>
</div>

</div>
</div>


<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>

</div>



	
</body>


</html>