<?php
	
	include("assests/style.php");
	include("assests/header.php");
	include("assests/files.php");
	include("connection.php");
	
?>




<div class="accordion accordion-flush" id="accordionFlushExample" style="padding: 150px 0 20px 0">
	
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading1">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapseOne">
        Cardiology
      </button>
    </h2>
    <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
		  		  
<div class="row d-flex justify-content-center">
	<?php
	$sql1 = "SELECT doctors.*, departments.departs
FROM doctors
JOIN departments ON doctors.specs = departments.id where departments.departs = 'Cardiology'
";
	$result1 = $conn->query($sql1);
	if($result1 -> num_rows > 0){
		while($row = $result1 -> fetch_assoc()){
			?>
  <div class="col col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
    <div class="card" style="width: 300px;height: 450px" >
	        <img src="<?php echo $row['image'] ?>" class="" style="height: 250px" alt="...">
      <div class="card-body">
        <h3 class="card-title my-2"><?php echo $row['name'] ?></h3>
		  <p class="m-0 p-0">Days : <mark><?php echo $row['day1'] ?> - <?php echo $row['day2'] ?> </mark></p>
		  <p class="py-2 m-0">Timing :  <mark><?php echo $row['time1'] ?> - <?php echo $row['time2'] ?></mark></p>
		<button class="btn btn-info "><a href="detail.php?ID=<?php echo $row['id']?>" class="m-0 p-0 ">Appointment</a></button>

      </div>
	  </div>
	</div>
	<?php
		}	}
	?>
		  
		  </div>		
		
		</div>
    </div>
  </div>
		
	
	
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapseOne">
        Neurology
      </button>
    </h2>
    <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
		  		  
<div class="row d-flex justify-content-center">
	<?php
	$sql1 = "SELECT doctors.*, departments.departs
FROM doctors
JOIN departments ON doctors.specs = departments.id where departments.departs = 'Neurology'
";
	$result1 = $conn->query($sql1);
	if($result1 -> num_rows > 0){
		while($row = $result1 -> fetch_assoc()){
			?>
  <div class="col col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
    <div class="card" style="width: 300px;height: 450px" >
	        <img src="<?php echo $row['image'] ?>" class="" style="height: 250px" alt="...">
      <div class="card-body">
        <h3 class="card-title my-2"><?php echo $row['name'] ?></h3>
		  <p class="m-0 p-0">Days : <mark><?php echo $row['day1'] ?> - <?php echo $row['day2'] ?>  </mark></p>
		  <p class="py-2 m-0">Timing :  <mark><?php echo $row['time1'] ?> : 00 - <?php echo $row['time2'] ?> : 00 </mark></p>
		<button class="btn btn-info "><a href="detail.php?ID=<?php echo $row['id']?>" class="m-0 p-0 ">Appointment</a></button>

      </div>
	  </div>
	</div>
	<?php
		}	}
	?>
		  
		  </div>		
		
		</div>
    </div>
  </div>
	
	
	
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapseOne">
        Urology
      </button>
    </h2>
    <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
		  		  
<div class="row d-flex justify-content-center">
	<?php
	$sql1 = "SELECT doctors.*, departments.departs
FROM doctors
JOIN departments ON doctors.specs = departments.id where departments.departs = 'Urology'
";
	$result1 = $conn->query($sql1);
	if($result1 -> num_rows > 0){
		while($row = $result1 -> fetch_assoc()){
			?>
  <div class="col col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
    <div class="card" style="width: 300px;height: 450px" >
	        <img src="<?php echo $row['image'] ?>" class="" style="height: 250px" alt="...">
      <div class="card-body">
        <h3 class="card-title my-2"><?php echo $row['name'] ?></h3>
		  <p class="m-0 p-0">Days : <mark><?php echo $row['day1'] ?> - <?php echo $row['day2'] ?>  </mark></p>
		  <p class="py-2 m-0">Timing :  <mark><?php echo $row['time1'] ?> : 00 - <?php echo $row['time2'] ?> : 00 </mark></p>
		<button class="btn btn-light btn-outline-dark "><a href="detail.php?ID=<?php echo $row['id']?>" class="m-0 p-0 ">Appointment</a></button>

      </div>
	  </div>
	</div>
	<?php
		}	}
	?>
		  
		  </div>		
		
		</div>
    </div>
  </div>
	
	
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading4">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapseOne">
        Opthalmology
      </button>
    </h2>
    <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
		  		  
<div class="row d-flex justify-content-center">
	<?php
	$sql1 = "SELECT doctors.*, departments.departs
FROM doctors
JOIN departments ON doctors.specs = departments.id where departments.departs = 'Opthalmology'
";
	$result1 = $conn->query($sql1);
	if($result1 -> num_rows > 0){
		while($row = $result1 -> fetch_assoc()){
			?>
  <div class="col col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
    <div class="card" style="width: 300px;height: 450px" >
	        <img src="<?php echo $row['image'] ?>" class="" style="height: 250px" alt="...">
      <div class="card-body">
        <h3 class="card-title my-2"><?php echo $row['name'] ?></h3>
		  <p class="m-0 p-0">Days : <mark><?php echo $row['day1'] ?> - <?php echo $row['day2'] ?>  </mark></p>
		  <p class="py-2 m-0">Timing :  <mark><?php echo $row['time1'] ?> : 00 - <?php echo $row['time2'] ?> : 00 </mark></p>
		<button class="btn btn-light btn-outline-dark "><a href="detail.php?ID=<?php echo $row['id']?>" class="m-0 p-0 ">Appointment</a></button>

      </div>
	  </div>
	</div>
	<?php
		}	}
	?>
		  
		  </div>		
		
		</div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading5">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapseOne">
        Orthopedic
      </button>
    </h2>
    <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
		  		  
<div class="row d-flex justify-content-center">
	<?php
	$sql1 = "SELECT doctors.*, departments.departs
FROM doctors
JOIN departments ON doctors.specs = departments.id where departments.departs = 'Orthopedic'
";
	$result1 = $conn->query($sql1);
	if($result1 -> num_rows > 0){
		while($row = $result1 -> fetch_assoc()){
			?>
  <div class="col col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
    <div class="card" style="width: 300px;height: 450px" >
	        <img src="<?php echo $row['image'] ?>" class="" style="height: 250px" alt="...">
      <div class="card-body">
        <h3 class="card-title my-2"><?php echo $row['name'] ?></h3>
		  <p class="m-0 p-0">Days : <mark><?php echo $row['day1'] ?> - <?php echo $row['day2'] ?> </mark></p>
		  <p class="py-2 m-0">Timing :  <mark><?php echo $row['time1'] ?> : 00 - <?php echo $row['time2'] ?> : 00 </mark></p>
		<button class="btn btn-light btn-outline-dark "><a href="detail.php?ID=<?php echo $row['id']?>" class="m-0 p-0 ">Appointment</a></button>

      </div>
	  </div>
	</div>
	<?php
		}	}
	?>
		  
		  </div>		
		
		</div>
    </div>
  </div>



  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading6">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapseOne">
        Dentist
      </button>
    </h2>
    <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
		  		  
<div class="row d-flex justify-content-center">
	<?php
	$sql1 = "SELECT doctors.*, departments.departs
FROM doctors
JOIN departments ON doctors.specs = departments.id where departments.departs = 'Dentist'
";
	$result1 = $conn->query($sql1);
	if($result1 -> num_rows > 0){
		while($row = $result1 -> fetch_assoc()){
			?>
  <div class="col col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
    <div class="card" style="width: 300px;height: 450px" >
	        <img src="<?php echo $row['image'] ?>" class="" style="height: 250px" alt="...">
      <div class="card-body">
        <h3 class="card-title my-2"><?php echo $row['name'] ?></h3>
		  <p class="m-0 p-0">Days : <mark><?php echo $row['day1'] ?> - <?php echo $row['day2'] ?> </mark></p>
		  <p class="py-2 m-0">Timing :  <mark><?php echo $row['time1'] ?> : 00 - <?php echo $row['time2'] ?> : 00 </mark></p>
		<button class="btn btn-light btn-outline-dark "><a href="detail.php?ID=<?php echo $row['id']?>" class="m-0 p-0 ">Appointment</a></button>

      </div>
	  </div>
	</div>
	<?php
		}	}
	?>
		  
		  </div>		
		
		</div>
    </div>
  </div>



  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading7">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapseOne">
        Dermatologist
      </button>
    </h2>
    <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
		  		  
<div class="row d-flex justify-content-center">
	<?php
	$sql1 = "SELECT doctors.*, departments.departs
FROM doctors
JOIN departments ON doctors.specs = departments.id where departments.departs = 'Dermatologist'
";
	$result1 = $conn->query($sql1);
	if($result1 -> num_rows > 0){
		while($row = $result1 -> fetch_assoc()){
			?>
  <div class="col col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
    <div class="card" style="width: 300px;height: 450px" >
	        <img src="<?php echo $row['image'] ?>" class="" style="height: 250px" alt="...">
      <div class="card-body">
        <h3 class="card-title my-2"><?php echo $row['name'] ?></h3>
		  <p class="m-0 p-0">Days : <mark><?php echo $row['day1'] ?> - <?php echo $row['day2'] ?> </mark></p>
		  <p class="py-2 m-0">Timing :  <mark><?php echo $row['time1'] ?> : 00 - <?php echo $row['time2'] ?> : 00 </mark></p>
		<button class="btn btn-light btn-outline-dark "><a href="detail.php?ID=<?php echo $row['id']?>" class="m-0 p-0 ">Appointment</a></button>

      </div>
	  </div>
	</div>
	<?php
		}	}
	?>
		  
		  </div>		
		
		</div>
    </div>
  </div>



</div>










<!--footer-->
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
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
incididunt ut labore.</p>
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
<p><i class="feather-mail"></i> <a href="https://doccure.dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="34505b575741465174514c55594458511a575b59">[email&#160;protected]</a></p>
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

