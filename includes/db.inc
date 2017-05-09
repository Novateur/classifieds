<?php
	try{
		$server = 'localhost:8889';
		$dbname = 'classifieds';
		$username = 'root';
		$password = 'root';
		$connection = new PDO("mysql:host=$server;dbname=$dbname",$username,$password);
		$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo "Error:".$e->getMessage();
	}
?>