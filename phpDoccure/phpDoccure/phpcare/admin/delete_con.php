<?php

include("connection.php");

?>


<?php


$id4 = $_GET['id4'];
$sql4 = "delete from contact where id = '$id4'";
	
if($conn -> query($sql4) === TRUE)
{
	header('location:contact.php');
}



?>
