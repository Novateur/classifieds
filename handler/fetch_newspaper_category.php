<?php	
	require_once("../includes/db.inc");
	require_once("../includes/functions.php");

	$name = $_POST['name'];
	$val = $_POST['val'];

	$sql="SELECT * FROM category WHERE newspaper='{$name}' 	AND section_id='{$val}'";
	$query = $connection->query($sql);
	if($query->rowCount() > 0)
	{
		$query->setFetchMode(PDO::FETCH_ASSOC);
		echo "<option value=''>--Select a category--</option>";
		echo "<option value='Any'>Any category</option>";
		foreach($query as $r)
		{
			echo "<option value='{$r['cat_name']}'>{$r['cat_name']}</option>";
		}
	}
	else
	{
		echo "<option value=''>--Select a category--</option>";
		echo "<option value='Any'>Any category</option>";
	}
?>