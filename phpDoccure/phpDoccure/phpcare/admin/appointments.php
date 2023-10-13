<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from doccure.dreamguystech.com/html/template/admin/appointment-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Jun 2023 12:14:07 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Doccure - Appointment List Page</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<?php

	include("files.php");
	include("connection.php");
	
?>
<?php
		
	session_start();
	$img = $_SESSION['img'];
	$name = $_SESSION['name']; 
	
	if(!isset($_SESSION['username']))
	{
		header('location:login.php');
	}
	
?>
</head>
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
<h3 class="page-title">Appointments</h3>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">

<div class="card">
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
<th>ID</th>
<th>Doctor Name</th>
<th>Patient Name</th>
<th>Apointment Time</th>
<th>Apointment Date</th>
<th>Appointment day</th>
<th class="text-center">Actions</th>

</tr>
</thead>
<tbody>
	
<?php

	$sql = "select appointments.id as id,patients.name as patient_id,doctors.name as doctor_id,doctors.image as 						doctor_img,appointments.date as date,appointments.time as time,appointments.day as day from appointments
			inner join patients on appointments.patient_id = patients.id
			INNER JOIN doctors on appointments.doctor_id = doctors.id";
	$result = $conn->query($sql);
	if($result -> num_rows > 0)
	{
		while($row = $result -> fetch_assoc())
		{
	?>
	
			<tr>
				<td>
				<h2 class="table-avatar">
				<a href="#"><?php echo $row['id'] ?></a>
				</h2>
				</td>
				<td>
				<h2 class="table-avatar">
				<a href="#"><?php echo $row['doctor_id'] ?></a>
				</h2>
				</td>
				<td>
				<h2 class="table-avatar">
				<a href="#"><?php echo $row['patient_id'] ?></a>
				</h2>
				</td>
				<td>
				<h2 class="table-avatar">
					<?php echo $row['time'] ?>
				</h2>
				</td>
				<td>
				<h2 class="table-avatar">
					<?php echo $row['date'] ?>
				</h2>
				</td>
				<td>
				<h2 class="table-avatar">
					<?php echo $row['day'] ?>
				</h2>
				</td>
				<td >
				
				<div class="actions d-flex justify-content-center">
					
					<a href="test.php?id=<?php echo $row['id']?>" class="btn btn-sm bg-success-light me-2" >
						<i class="fe fe-pencil"></i> Edit 
					</a>
					<a class="btn btn-sm bg-danger-light" data-bs-toggle="modal" href="#delete_modal<?php echo $row['id']?>">
						<i class="fe fe-trash"></i> Delete
					</a>
					</form>

				</div>
				
				</td>
			</tr>
	
	
	


<div class="modal fade" id="delete_modal<?php echo $row['id']?>" aria-hidden="true" role="dialog">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-body">
<div class="form-content p-2">
<h4 class="modal-title">Delete</h4>
<p class="mb-4">Are you sure want to delete?</p>
<button type="button" class="btn btn-danger float-end " data-bs-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary float-end me-2"><a href="delete.php?id=<?php echo $row['id']?>" class="text-white">Save</a> </button>

</div>
</div>
</div>
</div>
</div>


		


	
	    
	
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
	
	


<!-- Button trigger modal -->





<script src="assets/js/jquery-3.6.4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/datatables.min.js"></script>

<script src="assets/js/script.js"></script>
	
	
	

	
	
	
</body>

<!-- Mirrored from doccure.dreamguystech.com/html/template/admin/appointment-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Jun 2023 12:14:21 GMT -->
</html>