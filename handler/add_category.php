<?php	
	require_once("../includes/db.inc");
	require_once("../includes/functions.php");
	
	$newspaper = $_POST['newspaper'];
	$section = $_POST['section'];
	$name = $_POST['name'];

	$sql="INSERT INTO category (cat_name,newspaper,section_id) VALUES ('{$name}','{$newspaper}','{$section}')";
	$query = $connection->query($sql);
	if($query)
	{
		echo "added";
	}
	else
	{
		echo "error";
	}
?>