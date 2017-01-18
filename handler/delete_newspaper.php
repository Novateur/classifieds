<?php
	
	require_once("../includes/db.inc");
	require_once("../includes/functions.php");
	
	$id=sanitize($_POST['id']);
	
	$sql = "SELECT logo FROM newspapers WHERE id={$id}";
	$query = $connection->query($sql);
	if($query->rowCount()>0)
	{
		$query->setFetchMode(PDO::FETCH_ASSOC);
		foreach($query as $r)
		{
			unlink("../logos/{$r['logo']}");
			$sql="DELETE FROM newspapers WHERE id={$id}";
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