<?php
	
	require_once("../includes/db.inc");
	require_once("../includes/functions.php");
	
	$newspaper = $_POST['newspaper'];
	$name = $_POST['name'];

	foreach($newspaper as $r)
	{
		$sql="INSERT INTO section (section_name,newspaper) VALUES ('{$name}','{$r}')";
		$query = $connection->query($sql);
	}
	echo "added";
?>