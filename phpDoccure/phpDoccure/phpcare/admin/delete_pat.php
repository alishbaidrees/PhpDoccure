<?php


include("connection.php");

?>


<?php


$id2 = $_GET['id2'];
$sql="delete from appointments where patient_id = '$id2'";
$result = $conn->query($sql);
$sql2 = "delete from patients where id = '$id2'";
	
if($conn -> query($sql2) === TRUE)
{
	header('location:patients.php');
}



?>
