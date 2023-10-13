<?php

	include("assests/style.php");
	include("connection.php");
?>

<?php
	
	session_start();
	if(!isset($_SESSION['doc_id'])){
		
		header("location:dashboard_login.php");
	}
else{
	$doc_id = $_SESSION['doc_id'];
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
<body>

<div class="main-wrapper">



<div class="breadcrumb-bar-two" style="height: 100px">
<div class="container">
<div class="row align-items-center inner-banner">
<div class="col-md-12 col-12 text-center">
<h2 class="breadcrumb-title">Dashboard</h2>
<nav aria-label="breadcrumb" class="page-breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item" aria-current="page">Dashboard</li>
</ol>
</nav>
</div>
</div>
</div>
</div>
	
<?php
	$sql1 = "select * from doctors where id = '$doc_id'";
	$result1 = $conn->query($sql1);
	if($result1->num_rows > 0){
		while($row = $result1 -> fetch_assoc()){
		$dname = $row['name'];
		$image = $row['image'];	
			
		}
	}

else{
	echo "no doctor found of this name";
}	
	
	
	
	?>


<div class="content">
<div class="container">
<div class="row">
<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

<div class="profile-sidebar">
<div class="widget-profile pro-widget-content">
<div class="profile-info-widget">
<a href="#" class="booking-doc-img">
<img src="<?php echo $image ?>" alt="User Image">
</a>
<div class="profile-det-info">
<h3><?php echo $dname ?></h3>
<div class="patient-details">
<h5 class="mb-0">MBBS, MDS </h5>
</div>
</div>
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
	</row>
</div>
	
	
	
	
	
<div class="col-md-7 col-lg-8 col-xl-9">
<div class="row">
<div class="col-md-12">
<div class="card dash-card">
<div class="card-body">
<div class="row">
<div class="col-md-12 col-lg-4">
<div class="dash-widget dct-border-rht">
<div class="circle-bar circle-bar1">
<div class="circle-graph1" data-percent="75">
<img src="assets/img/icon-01.png" class="img-fluid" alt="patient">
</div>
</div>
<div class="dash-widget-info">
<h6>Total Patient</h6>
<h3>1500</h3>
<p class="text-muted">Till Today</p>
</div>
</div>
</div>
<div class="col-md-12 col-lg-4">
<div class="dash-widget dct-border-rht">
<div class="circle-bar circle-bar2">
<div class="circle-graph2" data-percent="65">
<img src="assets/img/icon-02.png" class="img-fluid" alt="Patient">
</div>
</div>
<div class="dash-widget-info">
<h6>Today Patient</h6>
<h3>160</h3>
<p class="text-muted">06, Nov 2019</p>
</div>
</div>
</div>
<div class="col-md-12 col-lg-4">
<div class="dash-widget">
<div class="circle-bar circle-bar3">
<div class="circle-graph3" data-percent="50">
<img src="assets/img/icon-03.png" class="img-fluid" alt="Patient">
</div>
</div>
<div class="dash-widget-info">
<h6>Appoinments</h6>
<h3>85</h3>
<p class="text-muted">06, Apr 2019</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
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
	<th>Patient Name</th>
<th>doctor Name</th>

<th>Appt Date</th>
<th>Appt Time</th>
<th>day</th>


<th></th>
</tr>
</thead>
	
<tbody>
			<?php
	$sql2="SELECT patients.*, appointments.*
FROM appointments
JOIN patients ON appointments.patient_id = patients.id where doctor_id = '$doc_id'";
	$result2 = $conn->query($sql2);
	if($result2->num_rows > 0){
		while($row = $result2 -> fetch_assoc()){
		?>	

<tr>
	

	
	<td>
<h2 class="table-avatar">
<a><?php echo $row['name']?></a>
</h2>
</td>
<td>
<h2 class="table-avatar">
<a><?php echo $dname?></a>
</h2>
</td>
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
	
	
	
</html>