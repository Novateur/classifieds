<?php	
	require_once("../includes/db.inc");
	require_once("../includes/functions.php");

	$name = $_POST['name'];

	$sql="SELECT * FROM section WHERE newspaper='{$name}'";
	$query = $connection->query($sql);
	if($query->rowCount() > 0)
	{
		$query->setFetchMode(PDO::FETCH_ASSOC);
		echo "<option value=''>--Select a section--</option>";
		foreach($query as $r)
		{
			echo "<option value='{$r['section_name']}'>{$r['section_name']}</option>";
		}
	}
	else
	{
		echo "<option value=''>--Select a section--</option>";
	}
?>