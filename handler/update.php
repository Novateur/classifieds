<?php
	require_once("../includes/db.inc");
	require_once("../includes/functions.php");
	
	$fname = sanitize($_POST['fname']);
	$lname = sanitize($_POST['lname']);
	//$email = sanitize($_POST['email']);
	$title = sanitize($_POST['title']);
	$phone = sanitize($_POST['phone']);
	$addr = sanitize($_POST['addr']);
	$city = sanitize($_POST['city']);
	$country = sanitize($_POST['country']);
	
	$sql = "UPDATE users SET first_name='{$fname}',last_name='{$lname}',phone='{$phone}',title='{$title}',phone='{$phone}',addr='{$addr}',city='{$city}',country='{$country}' WHERE email='{$_SESSION['username']}'";
	$query = $connection->query($sql);
	if($query->rowCount()>0)
	{
		echo "updated";
	}
	else
	{
		echo "Profile update error";
	}
?>
