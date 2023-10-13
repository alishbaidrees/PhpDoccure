<?php


include("connection.php");

?>

<?php


$id = $_GET['id'];
$sql = "delete from appointments where id = '$id'";
	
if($conn -> query($sql) === TRUE)
{
	header('location:appointments.php');
}



?>










