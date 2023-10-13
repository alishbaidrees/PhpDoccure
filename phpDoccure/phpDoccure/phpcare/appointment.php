<?php
	
	include("assests/style.php");
	include("connection.php");
	
	
session_start();
	if(!isset($_SESSION['p_id'])){
		header("location:login.php");
	}

	

	$d_id = $_GET['IID'];
	$p_id = $_SESSION['p_id'];

?>
<?php
	$sql1 = "SELECT doctors.*, departments.*
FROM doctors
JOIN departments ON doctors.specs = departments.id where doctors.id='$d_id'
";
	$result1 = $conn->query($sql1);
if($result1 -> num_rows > 0){
	while($row = $result1 -> fetch_assoc()){
		$dname = $row['name'];
		$age = $row['age'];
		$spec = $row['departs'];
		$time1 = $row['time1'];
		$time2 = $row['time2'];
		$day1 = $row['day1'];
		$day2 = $row['day2'];
		$city = $row['city'];
		$country = $row['country'];
		$image = $row['image'];
		
	}
	
}

$sql2 = "select * from patients where id = '$p_id'";
	$result2 = $conn->query($sql2);
if($result2 -> num_rows > 0){
	while($row = $result2 -> fetch_assoc()){
		$pname = $row['name'];
		$email = $row['email'];
		$phone = $row['phone'];
		$age = $row['age'];
		$city = $row['city'];
		
			}
}

	function function_alert($message) {
          echo "<script>alert('$message');</script>";
}
  
	if(isset($_POST['submit'])){
	$date = $_POST['date'];
	$day = $_POST['day'];
	$time = $_POST['time'];
		
		
		$sql5 = "SELECT *
FROM appointments
WHERE time = '$time' 
  OR day = '$day'   
  OR date = '$date' having doctor_id = '$d_id' ";
$result5 = $conn->query($sql5);


		

$sql4 = "SELECT *
FROM appointments
WHERE doctor_id = '$d_id' AND patient_id = '$p_id'
";
$result4 = $conn->query($sql4);
if($result4 -> num_rows > 0){
           function_alert( "Your Appointment was already Booked with this doctor "  );
}
		
		elseif($result5 -> num_rows > 0){
           function_alert( "This Timing on this date and day is not avaiable "  );
		}
		
		
		
		
else{

		$sql3 = "insert into appointments values ('' , '$p_id' , '$d_id' , '$date' , '$time' , '$day')";
	if($conn->query($sql3)){
           function_alert(" Your Appointment is Booked!" );
  	}
}

		
}


	include("assests/files.php");
$timeplus = $time1+1;
?>


                 <!--   Header start   -->

<header class="header header-one sticy-top header-fixed">
<div class="container">
<nav class="navbar navbar-expand-lg header-nav">
<div class="navbar-header">
<a id="mobile_btn" href="javascript:void(0);">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>
<a href="index.php" class="navbar-brand logo">
<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
</a>
</div>
<div class="main-menu-wrapper">
<div class="menu-header">
<a href="index.html" class="menu-logo">
<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
</a>
<a id="menu_close" class="menu-close" href="javascript:void(0);">
<i class="fas fa-times"></i>
</a>
</div>
<ul class="main-nav">
<li class="has-submenu megamenu ">
<a href="index.php">Home</a>
</li>
<li >
<a href="about-us.php">About-Us</a>
</li>
<li class="has-submenu megamenu">
<a href="contact_us.php">Contact-Us</a>
</li>
<li class="has-submenu">
<a href="javascript:void(0);">Doctors <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="patient-profile.php">Patient Profile</a></li>
<li><a href="doctor-dashboard.php">Doctor Dashboard</a></li>

</ul>
</li>
<li class="searchbar">
<a href="javascript:void(0);"><i class="feather-search"></i></a>
<div class="togglesearch" style="display: none;">
<form action="http://localhost/alishba_php/phpcare/search.php">
<div class="input-group">
<input type="text" class="form-control">
<button type="submit" class="btn">Search</button>
</div>
</form>
</div>
</li>
<li class="register-btn">
<a href="logout.php" class="btn btn-primary log-btn"><i class="feather-lock"></i>Logout</a>
</li>
	
	

</ul>
</div>
</nav>
</div>
</header>
                 <!--   Header end   -->



<section class="mb-2 container " style="padding:100px 0px 0px 0px; ">
	
<div class="d-flex justify-content-start align-items-center">    
	<h2 class="h1-responsive my-4 mx-0">Doctor Information</h2>
</div>
	

				
				
				
                <div class="row d-flex align-items-center mx-5 my-3">

                    <!--Grid column-->
                    <div class="col-3">
                        <div class="md-form mb-0">
							<img src="<?php echo $image ?>" width="250" height="250">
							<h3 class="p-2"><?php echo $dname ?> </h3>
                        </div>
                    </div>
					
					

                    <div class="col-9 pb-5">
                        <div class="md-form mb-0 d-flex align-items-center" style="border-left:1px solid rgba(200,200,200,1.00)">
							<div class="mx-2">
							<h4 class="py-1"> Age :   <?php echo $age ?></h4>
							<h4 class="py-1"> Speciality :  <span style="color: dodgerblue"> <?php echo $spec ?></span></h4>
							<h4 class="py-1"> Time :  <?php echo $time1 ?> : 00 - <?php echo $time2 ?> : 00</h4>
							<h4 class="py-1"> Day : <?php echo $day1 ?> - <?php echo $day2 ?></h4>
							<h4 class="py-1"> City : <?php echo $city ?> , Country : <?php echo $city ?> </h4>
								</div>
                        </div>
                    </div>
					
					
                </div>
<div class="or-line">

</section>


	
	
	
	
	
	<section class="mb-4 container " style="padding:20px 0px; ">
	
<div class="d-flex justify-content-start align-items-center">    
	<h2 class="h1-responsive my-4 mx-0">Patient Information</h2>
</div>
	

				
				
							<form action="" method="post">	
                <div class="row d-flex align-items-center mx-5 my-3">

                    <!--Grid column-->
                    <div class="col-12">
                        <div class="md-form mb-0 d-flex align-items-center" style="border-left:1px solid rgba(200,200,200,1.00)">
							<div>
							<h4 class="p-1"> Name : <span style="color: dodgerblue"><?php echo $pname ?></span> </h4>
							<h4 class="p-1"> Age : <span style="color: dodgerblue"><?php echo $age ?></span> </h4>
							<h4 class="p-1"> City :<?php echo $city ?> </h4>
							<h4 class="p-1"> Phone : <span style="border-bottom: 1px solid gray"><?php echo $phone ?></span> </h4>
							<h4 class="p-1"> Email : <span style="border-bottom: 1px solid gray"><?php echo $email ?></span> </h4>
								
								
								                        </div>
								</div>
								
								<div class="m-3">
	<h4 class="h1-responsive my-2 mx-0 " style="color: grey">Please select Date , Day & Time</h4>
								<input type="date" min="" max="2025-12-31" name="date">
								
								
							<select name="day">
								<option selected disabled hidden>Available Days</option>
								<option value="<?php echo $day1 ?>"> <?php echo $day1 ?></option>
								<option value="<?php echo $day2 ?>"><?php echo $day2 ?> </option>
								
								</select>	

									
									<select name="time">
								<option selected disabled hidden>Available Timings</option>
										
								<option value="<?php echo $time1.' : 00 - '.$time1.' : 30' ?>">
								<?php echo $time1.' : 00 - '.$time1.' : 30' ?>										</option>
								
								<option value="<?php echo $time1.' : 30 - '.$timeplus.' : 00' ?>">
								<?php echo $time1.' : 30 - '.$timeplus.' : 00' ?>										</option>
								
								<option value="<?php echo $timeplus.' : 00 - '.$timeplus.' : 30' ?>">
								<?php echo $timeplus.' : 00 - '.$timeplus.' : 30' ?>										</option>
								
								<option value="<?php echo $timeplus.' : 30 - '.$time2.' : 00' ?>">
								<?php echo $timeplus.' : 30 - '.$time2.' : 00' ?>										</option>
								
								
								</select>	
									
									
									</div>
			<div class="text-md-left my-3">
<input type="submit" name="submit" value="Submit" class="btn btn-info btn-outline-dark">            </div>
							</form>	
								</div>
					
					

					
					
                </div>

</section>
