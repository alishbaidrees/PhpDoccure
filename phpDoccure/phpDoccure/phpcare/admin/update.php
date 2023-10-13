<?php

include("connection.php");

?>

<?php

$id2 = val($_POST['a_id']);
$a_time = val($_POST['a_time']);
$a_date = val($_POST['a_date']);
$a_day = val($_POST['a_day']);


function val($data)
{
	$data = htmlspecialchars($data);
	$data = trim($data);
	$data = stripslashes($data);
	return $data;
}


$sql = "update appointments set date = '$a_date' , time = '$a_time' , day = '$a_day' where id = '$id2'" ;

if($conn -> query($sql) === true)
{
	
	header('location:appointments.php');
}

else
{
	echo "Ooopss! Data not inserted";
}




?>