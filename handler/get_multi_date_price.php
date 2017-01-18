<?php

	$myString = $_POST['multi_date'];
	$myArray = explode(',', $myString);
	//print_r($myArray);
	echo count($myArray);
	
?>