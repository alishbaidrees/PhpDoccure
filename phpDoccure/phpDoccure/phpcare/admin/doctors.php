<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from doccure.dreamguystech.com/html/template/admin/doctor-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Jun 2023 12:14:25 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Doccure - Doctor List Page</title>

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
<h3 class="page-title">List of Doctors</h3>

</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
	<td>ID</td>
<th>Doctor Name</th>
<th>Speciality</th>
<th>Timings</th>
<th>Days</th>
<th>City</th>
<th class="text-center">Actions</th>
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
?>			
			<tr>
			<td>#D00<?php echo $row['id'] ?></td>
			<td>
			<h2 class="table-avatar">
			<a href="#" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="<?php echo $row['image'] ?>" alt="User Image"></a>
			<a href="profile.html"><?php echo $row['name'] ?></a>
			</h2>
			</td>
			<td><?php echo $row['specs'] ?></td>
			<td><?php echo $time ?></td>
			<td><?php echo $day ?></td>
			<td><?php echo $row['city'] ?></td>
			<td>
			<div class="actions d-flex justify-content-center">

								<a href="edit_dr.php?id=<?php echo $row['id']?>" class="btn btn-sm bg-success-light me-2" >
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
<button type="button" class="btn btn-primary float-end me-2"><a href="delete_dr.php?id2=<?php echo $row['id']?>" class="text-white">Save</a> </button>

</div>
</div>
</div>
</div>
</div>
	
<?php	
	}
	}
	
?>

<a class="btn btn-sm bg-success-light mb-2" href="insert_dr.php">
						<i class="fe fe-plus"></i> Add Doctor
</a>

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


<script src="assets/js/jquery-3.6.4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/datatables.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from doccure.dreamguystech.com/html/template/admin/doctor-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Jun 2023 12:14:25 GMT -->
</html>