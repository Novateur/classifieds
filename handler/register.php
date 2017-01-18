<?php
	
	require_once("../includes/db.inc");
	require_once("../includes/functions.php");
	
	$fname = sanitize($_POST['fname']);
	$lname=sanitize($_POST['lname']);
	$email=sanitize($_POST['email']);
	$pass=sha1(md5($_POST['password']));
	$phone=sanitize($_POST['phone']);
	$addr=sanitize($_POST['addr']);
	$city=sanitize($_POST['city']);
	$post=sanitize($_POST['post']);
	$country=sanitize($_POST['country']);
	$title=sanitize($_POST['title']);

	
	if(check_email($email))
	{
		echo "You already have an account with us please login in with your details <a href='login.php'>Login</a>";
	}
	else
	{
		$sql = "INSERT INTO users (first_name,last_name,email,password,phone,title,addr,city,country,postal) 
		VALUES ('{$fname}','{$lname}','{$email}','{$pass}','{$phone}','{$title}','{$addr}','{$city}','{$country}','{$post}')";
		$query = $connection->query($sql);
		if($query)
		{
			$_SESSION['username']=$email;
			echo "inserted";
		}
		else
		{
			echo "Error:sorry,we couldn't create your account";
		}
	}

?>