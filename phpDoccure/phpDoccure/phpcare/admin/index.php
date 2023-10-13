<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Doccure - Dashboard</title>


<?php
	include("files.php");
	include("connection.php");
?>
</head>
	
<?php
		
	session_start();
	$img = $_SESSION['img'];
	$name = $_SESSION['name']; 
	
	if(!isset($_SESSION['username']))
	{
		header('location:login.php');
	}
	
?>
	
	
<body>

<div class="main-wrapper">

<?php

	include("header.php");
	
?>

<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Welcome <?php $name = $_SESSION['name']; echo $name ?> ! </h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Dashboard</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-xl-3 col-sm-6 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon text-primary border-primary">
<i class="fe fe-users"></i>
</span>
<div class="dash-count">
<h3>
<?php

		$sql = "select * from doctors";
		$result = $conn->query($sql);
		$count = $result->num_rows;
		echo $count;
		
?>
</h3>
</div>
</div>
<div class="dash-widget-info">
<h6 class="text-muted">Doctors</h6>
<div class="progress progress-sm">
<div class="progress-bar bg-primary w-50"></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon text-success">
<i class="fe fe-credit-card"></i>
</span>
<div class="dash-count">
<h3>
<?php

		$sql = "select * from patients";
		$result = $conn->query($sql);
		$count = $result->num_rows;
		echo $count;
		
?>	
</h3>
</div>
</div>
<div class="dash-widget-info">
<h6 class="text-muted">Patients</h6>
<div class="progress progress-sm">
<div class="progress-bar bg-success w-50"></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon text-danger border-danger">
<i class="fe fe-money"></i>
</span>
<div class="dash-count">
<h3>
<?php

		$sql = "select * from appointments";
		$result = $conn->query($sql);
		$count = $result->num_rows;
		echo $count;
		
?>	
</h3>
</div>
</div>
<div class="dash-widget-info">
<h6 class="text-muted">Appointments</h6>
<div class="progress progress-sm">
<div class="progress-bar bg-danger w-50"></div>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-3 col-sm-6 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon text-danger border-danger">
<i class="fe fe-money"></i>
</span>
<div class="dash-count">
<h3>
<?php

		$sql = "select * from departments";
		$result = $conn->query($sql);
		$count = $result->num_rows;
		echo $count;
		
?>	
</h3>
</div>
</div>
<div class="dash-widget-info">
<h6 class="text-muted">Specialities</h6>
<div class="progress progress-sm">
<div class="progress-bar bg-warning w-50"></div>
</div>
</div>
</div>
</div>
</div>

</div>

<div class="row">
<div class="col-md-6 d-flex">

<div class="card card-table flex-fill">
<div class="card-header">
<h4 class="card-title">Doctors List</h4>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
<th>Doctor Name</th>
<th>Speciality</th>
<th>No of Appointments</th>

</tr>
</thead>
<tbody>
	
	
	<?php

	$sql = "select doctors.id as id,doctors.name as name,doctors.age as age,doctors.time1 as time1,doctors.time2 as time2,doctors.day1 as day1,doctors.day2 as day2,doctors.city as city,departments.departs as specs,doctors.image as image from doctors inner join departments on doctors.id = departments.id";
	$result = $conn->query($sql);
	
	if($result -> num_rows > 0)
	{
		while($row = $result -> fetch_assoc())
		{
			
				$time = $row['time1'].' : 00- '.$row['time2'].' : 00 ';
				$day = $row['day1'].' - '.$row['day2'];
				$nm = $row['name'];
				$sql2 = "SELECT appointments.id as id,doctors.name as name  from appointments
							INNER JOIN doctors on appointments.doctor_id = doctors.id
							where doctor_id = (select id from doctors where name = '$nm')";
				$result2 = $conn->query($sql2);
				$count2 = $result2 -> num_rows;

?>			
			<tr>
			<td>
			<h2 class="table-avatar">
			<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="<?php echo $row['image'] ?>" alt="User Image"></a>
			<a href="profile.html"><?php echo $row['name'] ?></a>
			</h2>
			</td>
			<td><?php echo $row['specs'] ?></td>
			
			<td>
			<?php echo $count2; ?>
			</td>
			</tr>
	
<?php	
	}
	}
	
?>

	
	


</tbody>
</table>
</div>
</div>
</div>

</div>
<div class="col-md-6 d-flex">

<div class="card  card-table flex-fill">
<div class="card-header">
<h4 class="card-title">Patients List</h4>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>

<th>Patient Name</th>
<th>Phone</th>
<th>Email</th>

</tr>
</thead>
<tbody>
	

	<?php

	$sql = "select id,name,email,phone from patients";
	$result = $conn->query($sql);
	
	if($result -> num_rows > 0)
	{
		while($row = $result -> fetch_assoc())
		{
		

?>
			<tr>
			
			<td>
			<h2 class="table-avatar">
			<?php echo $row['name'] ?>
			</h2>
			</td>
			<td><?php echo $row['phone'] ?></td>
			
			<td><?php echo $row['email'] ?></td>
			</tr>
	
	
	
<?php	
	}
	}
	
?>
	
</tbody>
</table>
</div>
</div>
</div>

</div>
</div>
<div class="row">
<div class="col-md-12">

<div class="card card-table">
<div class="card-header">
<h4 class="card-title">Appointment List</h4>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
<th>S.No</th>
<th>Doctor Name</th>
<th>Speciality</th>
<th>Patient Name</th>
<th>Apointment Time</th>

</tr>
</thead>
<tbody>
	
	
<?php

	$sql = "select appointments.id as id,patients.name as patient_id,doctors.name as doctor_id,doctors.image as 						doctor_img,appointments.date as date,appointments.time as time,appointments.day as day from appointments
			inner join patients on appointments.patient_id = patients.id
			INNER JOIN doctors on appointments.doctor_id = doctors.id";
	$sql2 = "select departments.departs as specs from doctors
            inner join departments on doctors.id = departments.id";
	$results = $conn->query($sql2);
	$row2 = $results -> fetch_assoc();
	$result = $conn->query($sql);
	
	if($result -> num_rows > 0 )
	{
		$sql2 = "select departments.departs as specs from doctors
            inner join departments on doctors.id = departments.id";
			$results = $conn->query($sql2);
		
		while($row = $result -> fetch_assoc() )
		{
			
			$row2 = $results -> fetch_assoc();


?>
			<tr>
			<td><?php echo $row['id'] ?></td>
			<td>
			<h2 class="table-avatar">
			<a  class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="<?php echo $row['doctor_img'] ?>" alt="User Image"></a>
			<a ><?php echo $row['doctor_id'] ?></a>
			
			</h2>
			</td>
			<td><?php echo $row2['specs'] ?></td>
			<td>
			<h2 class="table-avatar">
			
			<a ><?php echo $row['patient_id'] ?></a>
			</h2>
			</td>
			<td><?php echo $row['date'] ?> <span class="text-primary d-block"><?php echo $row['time'] ?></span></td>
			<td>
			
			</td>

			</tr>

	
<?php	
	}
	}
	
?>
	



</tbody>
</table>
</div>
</div>
</div>

</div>
</div>
	
	
<div class="content container-fluid">


<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Specialities</h4>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
<th>ID</th>
<th>Specialities</th>

</tr>
</thead>
<tbody>
	
<?php
	
	
$sql = "select * from departments";
$result  = $conn->query($sql);
if($result->num_rows > 0)
{
	while($row=$result->fetch_assoc())
	{
		?>
		<tr>
<td>#SP00<?php echo $row['id'] ?></td>
<td>
<h2 class="table-avatar">
<a><?php echo $row['departs'] ?></a>
</h2>
</td>
</tr>

	<?php
	}
}
?>
	


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

</div>


<script src="assets/js/jquery-3.6.4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/raphael/raphael.min.js"></script>
<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/js/chart.morris.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from doccure.dreamguystech.com/html/template/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Jun 2023 12:12:42 GMT -->
</html>