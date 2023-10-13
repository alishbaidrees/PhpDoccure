<?php

include("connection.php");

?>

<?php

	if(isset($_GET['pid']))
	{
		$pid = $_GET['pid'];
		$sql="select * from patients where id = '$pid'";
		$result =$conn->query($sql);
		if($result->num_rows >0)
		{
			while($row=$result->fetch_assoc())
			{
				$id = $row['id'];
				$name = $row['name'];
				$age = $row['age'];
				$city = $row['city'];
				$email = $row['email'];
				$phone = $row['phone'];
				$password = $row['password'];
			}
		}
	}
	
?>


<form class="container w-50 border mt-5 p-5" method="post" action="">
	<h2 class="text-center mb-5">Edit Patient</h2>
							
							<div class="form-group col-12 ">
							<input type="hidden" value="<?php echo $id ?>" name="id">
							<label>Name:</label>
							<input type="text" class="form-control" name="name" value="<?php echo $name ?>">
						  </div>
							<div class="form-group col-12">
							<label>Age:</label>
							<input type="text" class="form-control" name="age" value="<?php echo $age ?>">
						  </div>
							<div class="form-group col-12">
							<label>City:</label>
							<input type="text" class="form-control" name="city" value="<?php echo $city ?>">
						  </div>
							<div class="form-group col-12">
							<label>Email:</label>
							<input type="text" class="form-control" name="email" value="<?php echo $email ?>">
						  </div>
							<div class="form-group col-12">
							<label>Phone:</label>
							<input type="text" class="form-control" name="phone" value="<?php echo $phone ?>">
						  </div>
							<div class="form-group col-12">
							<label>Password:</label>
							<input type="text" class="form-control" name="pass" value="<?php echo $password ?>">
						  </div>
						
						<button type="button" class="btn btn-danger float-end ms-2"><a href="specs.php" class="text-white">Cancel</a></button>
							<button type="submit" class="btn btn-secondary float-end" name="btn">Update</button>
</form>



<?php

if(isset($_POST['btn']))
{
	
$id = $_GET['pid'];

function val($data)
{
	$data = htmlspecialchars($data);
	$data = trim($data);
	$data = stripslashes($data);
	return $data;
}
	
$name2 = val($_POST['name']);
$age2 = val($_POST['age']);
$city2 = val($_POST['city']);
$email2 = val($_POST['email']);
$phone2 = val($_POST['phone']);
$pass2 = val($_POST['pass']);



	
$sql = "update patients set name = '$name2' , age = '$age2' ,city='$city2',email='$email2',phone='$phone2',password='$pass2'  where id ='$id' ";

if ($conn->query($sql) === TRUE) {
    header("location: patients.php");
    exit();
}

}

?>

<?php

include("files.php");

?>

