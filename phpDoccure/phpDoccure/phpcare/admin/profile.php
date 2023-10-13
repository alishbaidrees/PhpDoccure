<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from doccure.dreamguystech.com/html/template/admin/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Jun 2023 12:14:03 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Doccure - Profile</title>


<?php

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
	
<?php

	$sql = "select * from admin";
	$result = $conn->query($sql);
	if($result->num_rows > 0)
	{
		while ($row=$result->fetch_assoc())
		{
			$id=$row['id'];
			$name=$row['name'];
			$age=$row['age'];
			$city=$row['city'];
			$email=$row['email'];
			$phone=$row['phone'];
			$user=$row['username'];
			$pass=$row['passsword'];
		}
	}
	
?>
	
	<?php
	
if(isset($_POST['nbtn']))
{
$sql = "select * from admin where id='$id'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		$username=$row['username'];
		$pass=$row['passsword'];
	}
	
	$pass2 = $_POST['op'];
	if($pass2 == $pass)
	{
		$new=$_POST['np'];
		$sql2="update admin set passsword='$new'";
		if($conn->query($sql2) === TRUE)
		{
			header("profile.php");
		}
	}
}
	
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
<div class="col">
<h3 class="page-title">Profile</h3>

</div>
</div>
</div>
	
	

<div class="row">
<div class="col-md-12">
<div class="profile-header">
<div class="row align-items-center">
<div class="col-auto profile-image">
<a href="#">
<img class="rounded-circle" alt="User Image" src="assets/img/doctors/doctor-01.jpg">
</a>
</div>
<div class="col ml-md-n2 profile-user-info">
<h4 class="user-name mb-0"><?php echo $name ?></h4>
<h6 class="text-muted"><?php echo $email ?></h6>
</div>

</div>
</div>
<div class="profile-menu">
<ul class="nav nav-tabs nav-tabs-solid">
<li class="nav-item">
<a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#password_tab">Password</a>
</li>
</ul>
</div>
<div class="tab-content profile-tab-cont">

<div class="tab-pane fade show active" id="per_details_tab">

<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-body">
<h5 class="card-title d-flex justify-content-between">
<span>Personal Details</span>
<a class="edit-link" data-bs-toggle="modal" href="#edit_personal_details"><i class="fa fa-edit me-1"></i>Edit</a>
</h5>
<div class="row">
<p class="col-sm-2 text-muted text-sm-end mb-0 mb-sm-3">Name</p>
<p class="col-sm-10"><?php echo $name ?></p>
</div>
<div class="row">
<p class="col-sm-2 text-muted text-sm-end mb-0 mb-sm-3">Age</p>
<p class="col-sm-10"><?php echo $age ?></p>
</div>
<div class="row">
<p class="col-sm-2 text-muted text-sm-end mb-0 mb-sm-3">City</p>
<p class="col-sm-10"><?php echo $city ?></p>
</div>

<div class="row">
<p class="col-sm-2 text-muted text-sm-end mb-0 mb-sm-3">Email ID</p>
<p class="col-sm-10"><?php echo $email ?></p>
</div>
<div class="row">
<p class="col-sm-2 text-muted text-sm-end mb-0 mb-sm-3">Mobile</p>
<p class="col-sm-10"><?php echo $phone ?></p>
</div>
<div class="row">
<p class="col-sm-2 text-muted text-sm-end mb-0 mb-sm-3">Username</p>
<p class="col-sm-10"><?php echo $user ?></p>
</div>
<div class="row">
<p class="col-sm-2 text-muted text-sm-end mb-0 mb-sm-3">Password</p>
<p class="col-sm-10"><?php echo $pass ?></p>
</div>

</div>
</div>

<div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Personal Details</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<form method="post">
<div class="row form-row">
<div class="col-12 col-sm-6">
<div class="form-group">
<label>First Name</label>
<input type="text" class="form-control" value="<?php echo $name ?>" name="aname">
</div>
</div>

<div class="col-12">
<div class="form-group">
<label>Age</label>
<div class="cal-icon">
<input type="text" class="form-control " value="<?php echo $age ?>" name="aage">
</div>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Email ID</label>
<input type="email" class="form-control" value="<?php echo $email  ?>" name="aemail">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Mobile</label>
<input type="text" value="<?php echo $phone ?>" class="form-control" name="aphone">
</div>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>City</label>
<input type="text" class="form-control" value="<?php echo $city ?>" name="acity">
</div>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>Username</label>
<input type="text" class="form-control" value="<?php echo $user ?>" name="auser">
</div>
</div>

</div>
<button type="submit" class="btn btn-primary w-100" name="abtn">Save Changes</button>
</form>
</div>
</div>
</div>
</div>

</div>
</div>

</div>
	



<div id="password_tab" class="tab-pane fade">
<div class="card">
<div class="card-body">
<h5 class="card-title">Change Password</h5>
<div class="row">
<div class="col-md-10 col-lg-6">
<form method="post">
<div class="form-group">
<label>Old Password</label>
<input type="password" class="form-control" name="op">
</div>
<div class="form-group">
<label>New Password</label>
<input type="password" class="form-control" name="np">
</div>
<div class="form-group">
<label>Confirm Password</label>
<input type="password" class="form-control" >
</div>
<button class="btn btn-primary" type="submit" name="nbtn">Save Changes</button>
</form>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>

</div>

	
<?php

	if(isset($_POST['abtn']))
	{
		$name1=$_POST['aname'];
		$age1=$_POST['aage'];
		$email1=$_POST['aemail'];
		$city1=$_POST['acity'];
		$phone1=$_POST['aphone'];
		$user1=$_POST['auser'];
		
			
$sql = "update admin set name = '$name1' , age = '$age1' ,city='$city1',email='$email1',phone='$phone1',username='$user1'  where id ='$id' ";

if ($conn->query($sql) === TRUE) {
    
    exit();
}
	}
	
?>
	
	
	
<?php
	
include("files.php");	
	
?>


<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from doccure.dreamguystech.com/html/template/admin/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Jun 2023 12:14:06 GMT -->
</html>