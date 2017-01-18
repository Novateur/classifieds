<?php
	
	require_once("../includes/db.inc");
	require_once("../includes/functions.php");
	
	$name = sanitize($_POST['name']);
	$section = sanitize($_POST['section']);
	$cat = sanitize($_POST['cat']);
	
	$sql = "SELECT * FROM adsize WHERE newspaper='{$name}' AND section='{$section}' AND category='{$cat}'";
	$query = $connection->query($sql);
	if($query->rowCount()>0)
	{
		$query->setFetchMode(PDO::FETCH_ASSOC);
		foreach($query as $r)
		{
			echo "<div class='col-md-2 col-sm-6'>
										
										<div class='radio i-checks'>
										  <label>
											<input type='radio' name='size' value='{$r['price']}' onclick=\"update_price('{$r['price']}')\">
											<i></i>
											
										  </label>
										</div>
										<div class='panel b-a'>
											<div class='panel-heading no-border bg-default lt' style='height:200px'>
												<p></p>
												
											</div>
											<div class='padder-v text-center clearfix' style='height:40px;background-color:#f9fafc'>                            
												<div class='col-xs-12 b-r'>
													<p class='text-muted pull-right dropdown-toggle' data-toggle='dropdown' style='margin-top:-15px'>
														{$r['description']} &#8358;";echo number_format($r['price'],2);
													echo "</p>
												</div>
											</div>
										</div>
									</div>";
		}

	}
	else
	{
		echo "<div class='col-sm-12'>
			<div class='alert alert-sm alert-danger'><h4>".$name." does not have any advert space</h4></div>
		</div>";
	}
?>