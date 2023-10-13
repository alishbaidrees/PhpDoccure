<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from doccure.dreamguystech.com/html/template/admin/specialities.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Jun 2023 12:14:21 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Doccure - Messages</title>

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
<h3 class="page-title">Messages/Contacts</h3>

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
<th>Name</th>
<th >Email</th>
<th >Phone</th>
<th >Message</th>
<th class="text-center">Actions</th>
</tr>
</thead>
<tbody>
	
<?php
	
	
$sql = "select * from contact";
$result  = $conn->query($sql);
if($result->num_rows > 0)
{
	while($row=$result->fetch_assoc())
	{
		?>
		<tr>
<td>#C00<?php echo $row['id'] ?></td>
<td>
<h2 class="table-avatar">
<a><?php echo $row['name'] ?></a>
</h2>
</td>
<td class="w-25">
<h2 class="table-avatar">
<a><?php echo $row['email'] ?></a>
</h2>
</td>
<td>
<h2 class="table-avatar">
<a><?php echo $row['phone'] ?></a>
</h2>
</td>
<td>
<h2 class="table-avatar">
<a><?php echo $row['message'] ?></a>
</h2>
</td>
<td class="text-center">
<div class="actions">
<a class="btn btn-sm bg-success-light" href="edit_con.php?id=<?php echo $row['id'] ?>">
<i class="fe fe-pencil"></i> Edit
</a>
<a class="btn btn-sm bg-danger-light" data-bs-toggle="modal" href="#delete_modal<?php echo $row['id']?>">
									<i class="fe fe-trash"></i> Delete
								</a>
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
<button type="button" class="btn btn-primary float-end me-2"><a href="delete_con.php?id4=<?php echo $row['id']?>" class="text-white">Save</a> </button>

</div>
</div>
</div>
</div>
</div>
	
	<?php
	}
}
?>
	

	
	<a href="#Add_Specialities_details" data-bs-toggle="modal" class="btn btn-sm bg-success-light mb-2"><i class="fe fe-plus"></i> Add Contact/Message</a>
	

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
<h5 class="modal-title">Add Message</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<form method="post" action="">
<div class="row form-row">
<div class="col-12 col-sm-12">
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" name="c_name">
</div>
<div class="form-group">
<label>Email</label>
<input type="text" class="form-control" name="c_email">
</div>
<div class="form-group">
<label>Phone</label>
<input type="text" class="form-control" name="c_phone">
</div>
<div class="form-group">
<label>Message</label>
<textarea name="c_message" class="w-100 h-75"></textarea>
</div>
</div>

</div>
</div>
<button type="submit" class="btn btn-primary w-100" name="cbtn">Save</button>
</form>
</div>
</div>
</div>
</div>
	
<?php

if(isset($_POST['cbtn']))
{
	$cname=$_POST['c_name'];
	$cemail=$_POST['c_email'];
	$cphone=$_POST['c_phone'];
	$cmessage=$_POST['c_message'];
	
	$sql = "insert into contact values (null,'$cname','$cemail','$cphone','$cmessage')";
	if($conn->query($sql) === TRUE)
	{
		header("contact.php");
	}
}	
	
?>	
	



<div class="modal fade" id="edit_specialities_details" aria-hidden="true" role="dialog">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Edit Message</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<form>
<div class="row form-row">
<div class="col-12 col-sm-12">
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" name="c_name">
</div>
<div class="form-group">
<label>Email</label>
<input type="text" class="form-control" name="c_email">
</div>
<div class="form-group">
<label>Phone</label>
<input type="text" class="form-control" name="c_phone">
</div>
<div class="form-group">
<label>Message</label>
<textarea name="c_message" class="w-100 h-75"></textarea>
</div>
</div>

</div>
</div>
<button type="submit" class="btn btn-primary w-100">Save</button>
</form>
</div>
</div>
</div>



</div>

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