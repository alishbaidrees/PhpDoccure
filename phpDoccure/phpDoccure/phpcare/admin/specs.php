<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from doccure.dreamguystech.com/html/template/admin/specialities.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Jun 2023 12:14:21 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Doccure - Specialities Page</title>

</head>
<body>

<div class="main-wrapper">

<?php
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



<div class="page-wrapper">
	
	

<?php

	include("header.php");
	
?>
	
	
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-7 col-auto">
<h3 class="page-title">Specialities</h3>

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
<th>ID</th>
<th>Specialities</th>
<th >Description</th>
<th class="text-center">Actions</th>
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
<td class="w-25">
<h2 class="table-avatar">
<a><?php echo $row['description'] ?></a>
</h2>
</td>
<td class="text-center">
<div class="actions">
<a class="btn btn-sm bg-success-light" href="edit_spec.php?id=<?php echo $row['id'] ?>">
<i class="fe fe-pencil"></i> Edit
</a>

</div>
</td>
</tr>
	

	
<?php

	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$sql="select * from departments where id = '$id'";
		$result =$conn->query($sql);
		if($result->num_rows >0)
		{
			while($row=$result->fetch_assoc())
			{
				$name2 = $row['departs'];
				$desc = $row['description'];
			}
		}
	}
	
?>
	
	<?php
	}
}
?>
	

	
	<a href="#Add_Specialities_details" data-bs-toggle="modal" class="btn btn-sm bg-success-light mb-2"><i class="fe fe-plus"></i> Add Speciality</a>
	

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="modal fade" id="Add_Specialities_details" aria-hidden="true" role="dialog">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Specialities</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<form method="post" action="">
<div class="row form-row">
<div class="col-12 col-sm-12">
<div class="form-group">
<label>Speciality Name</label>
<input type="text" class="form-control" name="spec">
</div>
<div class="form-group">
<label>Description</label>
<input type="text" class="form-control" name="descr">
</div>
</div>

</div>
</div>
<button type="submit" class="btn btn-primary w-100" name="btns">Save</button>
</form>
</div>
</div>
</div>
</div>

</div>
	
	
<?php
	
if(isset($_POST['btns']))
{
	$spec = $_POST['spec'];
	$descr = $_POST['descr'];
	$sql = "insert into departments values (null,'$spec','$descr')";
	if($conn->query($sql) === TRUE)
	{
		header("specs.php");
	}
}	
	
?>
	
<?php

	include("files.php");
	
?>


<script src="assets/js/jquery-3.6.4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/datatables.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from doccure.dreamguystech.com/html/template/admin/specialities.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Jun 2023 12:14:25 GMT -->
</html>