<?php

include("connection.php");

?>


<form class="container w-50 border mt-5 p-5" method="post" action="">
	<h2 class="text-center mb-5">Add Patient:</h2>
							
							<div class="form-group  ">
							<label for="exampleInputEmail1">Full Name:</label>
							<input type="text" class="form-control" name="p_name" >
						  </div>
							<div class="form-group col-6 float-start">
							<label for="exampleInputEmail1">Age:</label>
							<input type="text" class="form-control" name="p_age">
						  </div>
						<div class="form-group col-6  float-start">
							<label for="exampleInputEmail1">City:</label>
							<input type="text" class="form-control" name="p_city">
						  </div>
						<div class="form-group ">
							<label for="exampleInputEmail1">Email:</label>
							<input type="email" class="form-control" name="p_email">
						  </div>
					
					<div class="form-group">
							<label for="exampleInputEmail1">Phone No:</label>
							<input type="text" class="form-control" name="p_phone">
						  </div>
					<div class="form-group">
							<label for="exampleInputEmail1">Password:</label>
							<input type="text" class="form-control" name="p_pass">
				
						  </div>
						
							
						  <button type="button" class="btn btn-danger float-end ms-2"><a href="patients.php" class="text-white">Cancel</a></button>
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
	
$p_name = val($_POST['p_name']);
$p_age = val($_POST['p_age']);
$p_city = val($_POST['p_city']);
$p_email = val($_POST['p_email']);
$p_phone = val($_POST['p_phone']);
$p_pass = val($_POST['p_pass']);


	
$sql = "INSERT INTO patients (id, name, age, city, email, phone,password) 
        VALUES (null, '$p_name', '$p_age', '$p_city', '$p_email', '$p_phone','$p_pass')";

if ($conn->query($sql) === TRUE) {
    header("location: patients.php");
    exit();
}

}

?>




<?php

include("files.php");

?>

