<?php

include("connection.php");

?>

<?php

	if(isset($_GET['id']))
	{
		$cid = $_GET['id'];
		$sql="select * from contact where id = '$cid'";
		$result =$conn->query($sql);
		if($result->num_rows >0)
		{
			while($row=$result->fetch_assoc())
			{
				$id = $row['id'];
				$name = $row['name'];
				$email = $row['email'];
				$phone = $row['phone'];
				$message = $row['message'];
			}
		}
	}
	
?>


<form class="container w-50 border mt-5 p-5" method="post" action="">
	<h2 class="text-center mb-5">Edit Contact/Message</h2>
							
							<div class="form-group col-12 ">
							<input type="hidden" value="<?php echo $id ?>" name="id">
							<label>Name:</label>
							<input type="text" class="form-control" name="cname" value="<?php echo $name ?>">
						  </div>
							
							<div class="form-group col-12">
							<label>Email:</label>
							<input type="text" class="form-control" name="cemail" value="<?php echo $email ?>">
						  </div>
							<div class="form-group col-12">
							<label>Phone:</label>
							<input type="text" class="form-control" name="cphone" value="<?php echo $phone ?>">
						  </div>
							<div class="form-group col-12">
							<label>Message:</label><br>
							<textarea name="cmessage" class="w-100"><?php echo $message ?></textarea>
						  </div>
						
						<button type="button" class="btn btn-danger float-end ms-2"><a href="specs.php" class="text-white">Cancel</a></button>
							<button type="submit" class="btn btn-secondary float-end" name="btn2">Update</button>
</form>



<?php

if(isset($_POST['btn2']))
{
	
$id = $_GET['id'];

function val($data)
{
	$data = htmlspecialchars($data);
	$data = trim($data);
	$data = stripslashes($data);
	return $data;
}
	
$name2 = val($_POST['cname']);
$email2 = val($_POST['cemail']);
$phone2 = val($_POST['cphone']);
$mess2 = val($_POST['cmessage']);



	
$sql = "update contact set name = '$name2' ,email='$email2',phone='$phone2',message='$mess2'  where id ='$id' ";

if ($conn->query($sql) === TRUE) {
    header("location: contact.php");
    exit();
}

}

?>

<?php

include("files.php");

?>

