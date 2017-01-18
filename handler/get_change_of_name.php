<?php
	
	require_once("../includes/db.inc");
	require_once("../includes/functions.php");

	$sql = "SELECT * FROM change_name LIMIT 0, 10";
	$query = $connection->query($sql);
	if($query->rowCount()>0)
	{		//echo"<a href='new_vendor.php' data-role='button' style='margin-top:-20px;margin-left:15px' class='btn btn-success btn-sm'>New vendor</a> <a href='#' onclick=\"invite_vendor()\" data-role='button' style='margin-top:-20px' class='btn btn-primary btn-sm'>Invite vendor</a><br/>";
		echo "<div class='row'>";
		$query->setFetchMode(PDO::FETCH_ASSOC);
		foreach($query as $r)
		{
			echo "<div class='col-md-3 col-sm-6'>
				<div class='panel b-a'>
					<div class='panel-heading no-border bg-default lt' style='height:140px'>
						I, formerly known as <b>".strtoupper($r['former_name'])."</b> now wish to be known and
						addressed as <b>".strtoupper($r['current_name'])."</b>. All documents remain valid, general public should 
						please take note";
					echo "</div>

				</div>
			</div>";
		}
	}

?>