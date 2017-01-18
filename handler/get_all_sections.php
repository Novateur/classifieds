<?php
	
	require_once("../includes/db.inc");
	require_once("../includes/functions.php");
	
	
	$sql_pag="SELECT COUNT(*) FROM section";
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
	
	$sql = "SELECT * FROM section LIMIT $start, $limit";
	$query = $connection->query($sql);

	if($query->rowCount()>0)
	{
		$query->setFetchMode(PDO::FETCH_ASSOC);
		echo "<table class='table table-striped table-responsive'>
			<tr>
			<th><b>Section Name</b></th>
			<th><b>Newspaper</b></th>
			<th><b>Delete</b></th>
			<th><b>Edit</b></th>
			</tr>";
		foreach($query as $r)
		{
			echo"<tr>
			<td>{$r['section_name']}</td>
			<td>{$r['newspaper']}</td>
			<td><a href='#' data-role='button' class='btn btn-danger btn-sm' onclick=\"delete_section({$r['id']},{$page})\"><i class='i i-trashcan'></i></a></td>
			<td><a href='edit_adsize.php?ref={$r['id']}' data-role='button' class='btn btn-default btn-sm'><i class='i i-pencil'></i></a></td>";
		}
		echo "</table>";
		
		echo"<div class='row'>";
			echo "<div class='col-sm-12'>";
				echo "<div class='text-center'>";
					echo "<ul class='pagination pagination'>";
						$previous=$page-1;
						$next=$page+1;
						$total_num_pages=ceil($totalpage1/$limit);
						if($total_num_pages>1)
						{
							echo"Page {$page} of {$total_num_pages}<br/>";
							if($previous>=1)
							{
								echo "<li><a href='#' onclick=\"get_all_sections_by_page({$previous})\"><i class='i i-arrow-left4'></i></a></li>";
							}
							for($i=1;$i<=$total_num_pages;$i++)
							{
								if($i==$page)
								{
									echo "<li class='active'><a href='#'>{$i}</a></li>";
								}
								else
								{
									echo "<li><a href='#'onclick=\"get_all_sections_by_page({$i})\">{$i}</a></li>";
								}
							}
							if($next<=$total_num_pages)
							{
								echo "<li><a href='#' onclick=\"get_all_sections_by_page({$next})\"><i class='i i-arrow-right4'></i></a></li>";
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