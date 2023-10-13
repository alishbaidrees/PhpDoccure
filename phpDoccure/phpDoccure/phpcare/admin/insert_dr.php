<?php

//
include("connection.php");

?>


<form class="container w-50 border mt-5 p-5" method="post" action="">
	<h2 class="text-center mb-5">Add New Doctor:</h2>
							
							<div class="form-group  ">
							<label for="exampleInputEmail1">Full Name:</label>
							<input type="text" class="form-control" name="d_name" value="Dr.">
						  </div>
							<div class="form-group col-6 float-start">
							<label for="exampleInputEmail1">Age:</label>
							<input type="text" class="form-control" name="d_age">
						  </div>
						  <div class="form-group">
							<label for="exampleInputEmail1" class="pe-2">Speciality:</label>
							  <select class="w-50  border" name="d_spec">
								  <option selected></option>

	<?php

$sql = "select departs from departments";
$result = $conn->query($sql);
if($result -> num_rows > 0)
{
	while($row = $result->fetch_Assoc())
	{
		?>
			 <option><?php echo $row['departs'] ?></option>
								  
<?php
	}
}

?>
									
							</select>
						  </div>
						 
						  <div class="form-group col-6 float-start">
							<label for="exampleInputEmail1">Time 1</label>
							<input type="" class="form-control" name="d_time1">
						  </div>
							<div class="form-group col-6 float-start">
							<label for="exampleInputEmail1">Time 2</label>
							<input type="" class="form-control" name="d_time2">
						  </div>
						<div class="form-group col-6 float-start">
							<label for="exampleInputEmail1">Day 1</label>
							<input type="" class="form-control" name="d_day1">
						  </div>
						<div class="form-group col-6 float-start">
							<label for="exampleInputEmail1">Day 2</label>
							<input type="" class="form-control" name="d_day2">
						  </div>
						<div class="form-group ">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" class="form-control" name="d_email">
						  </div>
					<div class="form-group">
							<label for="exampleInputEmail1">City</label>
							<input type="text" class="form-control" name="d_city">
						  </div>
					<div class="form-group">
							<label for="exampleInputEmail1">Country</label>
							<input type="text" class="form-control" name="d_cont">
						  </div>
					<div class="form-group">
							<label for="exampleInputEmail1">Password</label>
							<input type="text" class="form-control" name="d_pass">
						  </div>
						
						  <button type="button" class="btn btn-danger float-end ms-2"><a href="appointments.php" class="text-white">Cancel</a></button>
							<button type="submit" class="btn btn-secondary float-end" name="btn">Insert</button>
						</form>

<?php

if(isset($_POST['btn']))
{
	

function val($data)
{
	$data = htmlspecialchars($data);
	$data = trim($data);
	$data = stripslashes($data);
	return $data;
}
	
$dname = val($_POST['d_name']);
$dage = val($_POST['d_age']);
$dcity = val($_POST['d_city']);
$dcont = val($_POST['d_cont']);
$d_time1 = val($_POST['d_time1']);
$d_time2 = val($_POST['d_time2']);
$d_day1 = val($_POST['d_day1']);
$d_day2 = val($_POST['d_day2']);
$d_pass = val($_POST['d_pass']);
$d_spec = val($_POST['d_spec']);


$sqli = "SELECT id FROM departments WHERE departs = '$d_spec'";
$result = $conn->query($sqli);


if ($result->num_rows > 0) {
    $row2 = $result->fetch_assoc();
    $s_id = $row2['id'];
}


	
$sql = "INSERT INTO doctors
        VALUES (null, '$dname', '$dage', '$s_id', '$d_time1', '$d_time2','$d_day1','$d_day2','$dcity','$dcont','images/eye-doctor-03.jpg','$d_pass')";

if ($conn->query($sql) === TRUE) {
    header("location: doctors.php");
    exit();
}

}

?>




<?php

include("files.php");

?>

