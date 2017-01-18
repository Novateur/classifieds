<?php
	
	require_once("../includes/db.inc");
	require_once("../includes/functions.php");
	
	$id=sanitize($_POST['id']);
	
	$sql="DELETE FROM section WHERE id={$id}";
	$query = $connection->query($sql);
	if($query)
	{
		echo "deleted";
	}
	else
	{
		echo "error";
	}


?>