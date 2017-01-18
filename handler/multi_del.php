<?php	
	
	require_once("../includes/db.inc");
	require_once("../includes/functions.php");
	
	if(isset($_POST['adsize']))
	{
		$adsize=$_POST['adsize'];
		array_map('sanitize',$adsize);
		$adsize=implode(',',$adsize);
		
		$sql="DELETE FROM adsize WHERE id IN ({$adsize})";
		$query=$connection->query($sql);
		if($query)
		{
			echo "deleted";
		}
		else
		{
			echo "error";
		}
	}
	else
	{
		echo "error";
	}
?>