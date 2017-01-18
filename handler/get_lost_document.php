<?php
	
	require_once("../includes/db.inc");
	require_once("../includes/functions.php");

	$sql = "SELECT * FROM loss_of_document LIMIT 0, 10";
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
						This is to inform the general public of the loss of {$r['lost_document']},belonging to {$r['owner_name']}.
						All effort to trace the said document proved abortive the general public and authority concern should take note";
					echo "</div>

				</div>
			</div>";
		}
	}

?>