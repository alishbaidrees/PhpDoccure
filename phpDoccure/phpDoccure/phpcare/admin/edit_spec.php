<?php

include("connection.php");

?>

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


<form class="container w-50 border mt-5 p-5" method="post" action="">
	<h2 class="text-center mb-5">Edit Speciality</h2>
							
							<div class="form-group col-12 ">
							<input type="hidden" value="<?php echo $id ?>" name="id">
							<label>Name:</label>
							<input type="text" class="form-control" name="name" value="<?php echo $name2 ?>">
						  </div>
							<div class="form-group col-12">
							<label>Description:</label>
							<input type="text" class="form-control" name="desc" value="<?php echo $desc ?>">
						  </div>
						
						<button type="button" class="btn btn-danger float-end ms-2"><a href="specs.php" class="text-white">Cancel</a></button>
							<button type="submit" class="btn btn-secondary float-end" name="btn">Update</button>
</form>



<?php

if(isset($_POST['btn']))
{
	
$id = $_GET['id'];

function val($data)
{
	$data = htmlspecialchars($data);
	$data = trim($data);
	$data = stripslashes($data);
	return $data;
}
	
$name = val($_POST['name']);
$desc = val($_POST['desc']);



	
$sql = "update departments set departs = '$name' , description = '$desc' where id ='$id' ";

if ($conn->query($sql) === TRUE) {
    header("location: specs.php");
    exit();
}

}

?>

<?php

include("files.php");

?>

