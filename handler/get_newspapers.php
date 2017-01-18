<?php
	
	require_once("../includes/db.inc");
	require_once("../includes/functions.php");
	
	$sql = "SELECT * FROM newspapers";
	$query = $connection->query($sql);
	if($query->rowCount()>0)
	{
		echo "<div class='row'>";
		$query->setFetchMode(PDO::FETCH_ASSOC);
		foreach($query as $r)
		{
			echo "<div class='col-sm-4'>
				<div class='panel b-a'>
					<div class='panel-heading no-border bg-default lt' style='min-height:162px'>
						<p class='text-center' style='font-size:17px'>
							<img src='logos/{$r['logo']}' height='100'/>
						</p>
						<p class='text-center' style='font-size:17px'>
							{$r['description']}
						</p>						
						<p class='text-center'>
							<a href='home.php?newspaper={$r['name_newspaper']}'data-role='button' class='btn btn-danger btn-lg btn-rounded'>Proceed</a>
						</p>
					</div>
				</div>
			</div>";
		}

	}

?>