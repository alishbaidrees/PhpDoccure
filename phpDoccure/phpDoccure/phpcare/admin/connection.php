<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "phpcare";

$conn = new MySQLi($server,$user,$password,$db);

if($conn -> connect_error)
{
	die ("Connection error!");
}



?>