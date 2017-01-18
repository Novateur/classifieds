<?php
	
	require_once("../includes/db.inc");
	require_once("../includes/functions.php");
	
	$id=sanitize($_POST['id']);
	
	$sql = "SELECT image FROM adsize WHERE id={$id}";
	$query = $connection->query($sql);
	if($query->rowCount()>0)
	{
		$query->setFetchMode(PDO::FETCH_ASSOC);
		foreach($query as $r)
		{
			unlink("../adsize/{$r['image']}");
			$sql="DELETE FROM adsize WHERE id={$id}";
			$query = $connection->query($sql);
			if($query)
			{
				echo "deleted";
			}
			else
			{
				echo "error";
			}
		}
	}
	else
	{
		echo "Couldn't fetch newspaper logo";
	}


?>