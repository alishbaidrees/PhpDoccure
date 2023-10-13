<?php

	include("assests/style.php");
	include("connection.php");
?>

<?php
	
	session_start();

	if(!isset($_SESSION['p_id'])){
		
		header("location:login.php");
	}
else{
	$p_id = $_SESSION['p_id'];
}
	include("assests/header.php");
	include("assests/files.php");

?>
	<?php
	$sql1 = "select * from patients where id = '$p_id'";
	$result1 = $conn->query($sql1);
	if($result1->num_rows > 0){
		while($row = $result1 -> fetch_assoc()){
		$name = $row['name'];
		$age = $row['age'];
		$city = $row['city'];
		$email = $row['email'];
		$phone = $row['phone'];
			
			
		}
	}

else{
	echo "no patient found of this name";
}	
	
	
	$sql5 = "select * from appointments where patient_id = '$p_id'";
	$result5 = $conn->query($sql5);
	if($result5 -> num_rows > 0){
		while($row = $result5 -> fetch_assoc()){
			$idd = $row['id'];
		}
	}

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



<div class="breadcrumb-bar-two" style="height: 100px">
<div class="container">
<div class="row align-items-center inner-banner">
<div class="col-md-12 col-12 text-center">
<h2 class="breadcrumb-title">Paitent Dashboard</h2>
<nav aria-label="breadcrumb" class="page-breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home </a></li>
<li class="breadcrumb-item" aria-current="page">Patient Profile</li>
</ol>
</nav>
</div>
</div>
</div>
</div>
	
	
	


<div class="content">
<div class="container">
<div class="row">
<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

<div class="profile-sidebar">
<div class="widget-profile p-4">
	<h3>Patient Details</h3>
<div class="profile-det-info">
<h3> Name : <span style="color: dodgerblue"><?php echo $name ?></span></h3>
<h3> Age : <?php echo $age ?></h3>
<h3> City : <?php echo $city ?></h3>
<h3> Phone : <?php echo $phone ?></h3>
<h3> Email/Username <?php echo $email ?></h3>
</div>
</div>
<div class="dashboard-widget">
<nav class="dashboard-menu">
<ul>
<li class="active">
<a href="doctor-dashboard.php">
<i class="fas fa-columns"></i>
<span>Dashboard</span>
</a>
</li>
<li>
<a href="logout.php">
<i class="fas fa-sign-out-alt"></i>
<span>Logout</span>
</a>
</li>
</ul>
</nav>
</div>
</div>

</div>
	
	
	
	
<div class="col-md-7 col-lg-8 col-xl-9">
<div class="row">
<div class="col-md-12">
<h4 class="mb-4">Patient Appoinment</h4>
<div class="appointment-tab">

<div class="tab-content">

<div class="tab-pane show active" id="upcoming-appointments">
<div class="card card-table mb-0">
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
	

<tr>
<th>doctor Name</th>

<th>Appt Date</th>
<th>Appt Time</th>
<th>day</th>


<th></th>
</tr>
</thead>
	
<tbody>
		<form method="post" action="">
			<?php
	$sql2="SELECT doctors.name , appointments.* FROM appointments INNER JOIN doctors ON appointments.doctor_id = doctors.id having patient_id = '$p_id'";
	$result2 = $conn->query($sql2);
	if($result2->num_rows > 0){
		while($row = $result2 -> fetch_assoc()){
		?>	

<tr>

<td><?php echo $row['name']?></td>
<td><?php echo $row['date']?></td>
<td><?php echo $row['time']?></td>
<td><?php echo $row['day']?></td>
			<?php	

		}
	}

	
	?>
	


</tr>
		
</tbody>
</table>
	

	
	
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
<p><i class="feather-mail"></i> <a href="https://doccure.dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d9bdb6babaacabbc99bca1b8b4a9b5bcf7bab6b4">[email&#160;protected]</a></p>
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

