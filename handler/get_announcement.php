<?php
	
	require_once("../includes/db.inc");
	require_once("../includes/functions.php");

	$sql = "SELECT * FROM announcement LIMIT 0, 8";
	$query = $connection->query($sql);
	if($query->rowCount()>0)
	{
		echo "<div class='row'>";
		$query->setFetchMode(PDO::FETCH_ASSOC);
		foreach($query as $r)
		{
			echo "<div class='col-md-4'>
				<div class='panel b-a'>
					<div class='panel-heading no-border bg-default lt' style='height:auto'>
						I,{$r['announcer_name']},{$r['address']} hereby announces {$r['announcing']}";
					echo "</div>

				</div>
			</div>";
		}
	}

?>