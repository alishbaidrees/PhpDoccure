<?php

//
include("connection.php");

?>

<?php
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$sql = "select doctors.id as id,doctors.name as name,doctors.age as age,doctors.time1 as time1,doctors.time2 as time2,doctors.day1 as day1,doctors.day2 as day2,doctors.city as city,doctors.country as country,doctors.password as password,departments.departs as specs,doctors.image as image from doctors  inner join departments on doctors.id = departments.id where doctors.id = '$id'";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			?>

<form class="container w-50 border mt-5 p-5" method="post" action="">
	<h2 class="text-center mb-5">Edit Doctor:</h2>
							
							<div class="form-group  ">
							<label for="exampleInputEmail1">Full Name:</label>
							<input type="text" class="form-control" name="d_name" value="<?php echo $row['name'] ?>">
						  </div>
							<div class="form-group col-6 float-start">
							<label for="exampleInputEmail1">Age:</label>
							<input type="text" class="form-control" name="d_age" value="<?php echo $row['age'] ?>">
						  </div>
						  <div class="form-group">
							<label for="exampleInputEmail1" class="pe-2">Speciality:</label>
							  <select class="w-50  border" name="d_spec">
								  <option selected><?php echo $row['specs'] ?></option>

	<?php

$sql2 = "select departs from departments";
$result2 = $conn->query($sql2);
if($result2 -> num_rows > 0)
{
	while($row2 = $result2->fetch_Assoc())
	{
		?>
			 <option><?php echo $row2['departs'] ?></option>
								  
<?php
	}
}

?>
									
							</select>
						  </div>
						 
						  <div class="form-group col-6 float-start">
							<label for="exampleInputEmail1">Time 1</label>
							<input type="" class="form-control" name="d_time1" value="<?php echo $row['time1'] ?>">
						  </div>
							<div class="form-group col-6 float-start">
							<label for="exampleInputEmail1">Time 2</label>
							<input type="" class="form-control" name="d_time2" value="<?php echo $row['time2'] ?>">
						  </div>
						<div class="form-group col-6 float-start">
							<label for="exampleInputEmail1">Day 1</label>
							<input type="" class="form-control" name="d_day1" value="<?php echo $row['day1'] ?>">
						  </div>
						<div class="form-group col-6 float-start">
							<label for="exampleInputEmail1">Day 2</label>
							<input type="" class="form-control" name="d_day2" value="<?php echo $row['day2'] ?>">
						  </div>
						
					<div class="form-group">
							<label for="exampleInputEmail1">City</label>
							<input type="text" class="form-control" name="d_city" value="<?php echo $row['city'] ?>">
						  </div>
					<div class="form-group">
							<label for="exampleInputEmail1">Country</label>
							<input type="text" class="form-control" name="d_cont" value="<?php echo $row['country'] ?>">
						  </div>
					<div class="form-group">
							<label for="exampleInputEmail1">Password</label>
							<input type="text" class="form-control" name="d_pass" value="<?php echo $row['password'] ?>">
						  </div>
						
						  <button type="button" class="btn btn-danger float-end ms-2"><a href="doctors.php" class="text-white">Cancel</a></button>
							<button type="submit" class="btn btn-secondary float-end" name="btn">Update</button>
						</form>

<?php
		}
	}
}

?>



	


<?php

if(isset($_POST['btn']))
{
	$id2=$_GET['id'];
	

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
$result2 = $conn->query($sqli);


if ($result2->num_rows > 0) 
{
	while($row=$result2->fetch_assoc())
	{
		  $s_id = $row['id'];
	}
    
}


	
$sql = "Update doctors set name ='$dname',age = '$dage',specs = '$s_id',time1='$d_time1',time2='$d_time2',day1='$d_day1',day2='$d_day2',city='$dcity',country='$dcont',image='images/eye-doctor-03.jpg',password='$d_pass' where id = '$id2'";
if ($conn->query($sql) === TRUE) {
    header("location: doctors.php");
    exit();
}

}

?>




<?php

include("files.php");

?>
