<?php

//
include("connection.php");

?>


<form class="container w-50 border mt-5 p-5" method="post" action="">
	<h2 class="text-center mb-5">Add New Appointment:</h2>
							<input type="hidden" value="<?php echo $id2 ?>" name="a_id">
						  <div class="form-group">
							<label for="exampleInputEmail1" class="pe-2">Doctor Name:</label>
							  <select class="w-50  border" name="d_name">
								  <option selected></option>

<?php

$sql = "select name from doctors";
$result = $conn->query($sql);
if($result -> num_rows > 0)
{
	while($row = $result->fetch_Assoc())
	{
		?>
			 <option><?php echo $row['name'] ?></option>
								  
<?php
	}
}

?>
									
							</select>
						  </div>
						  <div class="form-group">
							<label for="exampleInputEmail1" class="pe-2">Patient Name:</label>
							  <select class="w-50 border" name="p_name">
								  <option selcted></option>
							
<?php

$sql = "select name from patients";
$result = $conn->query($sql);
if($result -> num_rows > 0)
{
	while($row = $result->fetch_Assoc())
	{
		?>
			 <option><?php echo $row['name'] ?></option>
								  
<?php
	}
}

?>
							  </select>  
						  </div>
						  <div class="form-group">
							<label for="exampleInputEmail1">Appointment Time:</label>
							<input type="time" class="form-control" name="a_time">
						  </div>
						<div class="form-group">
							<label for="exampleInputEmail1">Appointment Date:</label>
							<input type="date" class="form-control" name="a_date">
						  </div>
							<div class="form-group">
							<label for="exampleInputEmail1" class="me-2 ">Appointment Day:</label>
							<select class="w-25 border" name="a_day">
								<option selected></option>
								<option>Monday</option>	
								<option>Tuesday</option>	
								<option>Wednesday</option>	
								<option>Thursday</option>	
								<option>Friday</option>	
								<option>Satday</option>	
								<option>Sunday</option>	
							</select>
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
$pname = val($_POST['p_name']);
$a_time = val($_POST['a_time']);
$a_date = val($_POST['a_date']);
$a_day = val($_POST['a_day']);


$sqli = "SELECT id FROM doctors WHERE name = '$dname'";
$sqli2 = "SELECT id FROM patients WHERE name = '$pname'";

$result = $conn->query($sqli);
$result2 = $conn->query($sqli2);

if ($result->num_rows > 0) {
    $row2 = $result->fetch_assoc();
    $d_id = $row2['id'];
}

if ($result2->num_rows > 0) {
    $row3 = $result2->fetch_assoc();
    $p_id = $row3['id'];
}

	
$sql = "INSERT INTO appointments (id, doctor_id, patient_id, date, time, day) 
        VALUES (null, '$d_id', '$p_id', '$a_date', '$a_time', '$a_day')";

if ($conn->query($sql) === TRUE) {
    header("location: appointments.php");
    exit();
}

}

?>




<?php

include("files.php");

?>
