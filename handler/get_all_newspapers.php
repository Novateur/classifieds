<?php
	
	require_once("../includes/db.inc");
	require_once("../includes/functions.php");
	
	
	$sql_pag="SELECT COUNT(*) FROM newspapers";
	$totalpage=$connection->query($sql_pag);
	$totalpage->setFetchMode(PDO::FETCH_ASSOC);
	foreach($totalpage as $t)
	{
		$totalpage1=array_shift($t);
	}
	$limit=25;
	$page=$_GET['page'];
	if($page)
	{
		$start=($page-1) * $limit;
	}
	else
	{
		$start=0;
	}
	
	$sql = "SELECT * FROM newspapers LIMIT $start, $limit";
	$query = $connection->query($sql);

	if($query->rowCount()>0)
	{
		$query->setFetchMode(PDO::FETCH_ASSOC);
		echo "<form id='ma_multi_del' style='font-size:14px'>";
		echo "<table class='table table-striped table-responsive'>
			<tr>
			<th><b>Name</b></th>
			<th><b>Description</b></th>
			<th><b>Logo</b></th>
			<th><b>Delete</b></th>
			<th><b>Edit</b></th>
			</tr>";
		foreach($query as $r)
		{
			echo"<tr>
			<td>{$r['name_newspaper']}</td>
			<td>{$r['description']}</td>
			<td><a href='#' onclick=\"view_logo('{$r['logo']}')\"><img src='logos/{$r['logo']}' height='40' width='40' class='img-circle'/></a></td>
			<td><a href='#' data-role='button' class='btn btn-danger btn-sm' onclick=\"delete_newspaper({$r['id']},{$page})\"><i class='i i-trashcan'></i></a></td>
			<td><a href='edit_newspaper.php?ref={$r['id']}' data-role='button' class='btn btn-default btn-sm'><i class='i i-pencil'></i></a></td>";
		}
		echo "</table>";
		echo "</form>";
		
		echo"<div class='row'>";
			echo "<div class='col-sm-12'>";
				echo "<div class='text-right'>";
					echo "<ul class='pagination pagination'>";
						$previous=$page-1;
						$next=$page+1;
						$total_num_pages=ceil($totalpage1/$limit);
						if($total_num_pages>1)
						{
							echo"Page {$page} of {$total_num_pages}<br/>";
							if($previous>=1)
							{
								echo "<li><a href='#' onclick=\"paginate({$previous})\"><i class='i i-arrow-left4'></i></a></li>";
							}
							for($i=1;$i<=$total_num_pages;$i++)
							{
								if($i==$page)
								{
									echo "<li class='active'><a href='#'>{$i}</a></li>";
								}
								else
								{
									echo "<li><a href='#'onclick=\"paginate({$i})\">{$i}</a></li>";
								}
							}
							if($next<=$total_num_pages)
							{
								echo "<li><a href='#' onclick=\"paginate({$next})\"><i class='i i-arrow-right4'></i></a></li>";
							}
						}
					echo "</ul>";
				echo "</div>";
			echo "</div>";
		echo "</div>";
	}
	else
	{
		echo "<h2>No newspaper has been added yet</h2>";
	}

?>