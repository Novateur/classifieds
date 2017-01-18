<?php

	require_once("../includes/db.inc");
	require_once("../includes/functions.php");
	
	$id=sanitize($_POST['id']);
	
	$sql = "SELECT * FROM adsize WHERE id={$id}";
	$query = $connection->query($sql);
	if($query->rowCount()>0)
	{
		$query->setFetchMode(PDO::FETCH_ASSOC);
		
		foreach($query as $r)
		{

			echo "<label>Advert size price<span class='req'>*</span></label><br/>
			<input type='text' name='price' id='price' value='{$r['price']}' class='form-control'/><br/>
			<label>Brief description<span class='req'>*</span></label><br/>
			<input type='text' name='desc' id='desc' value='{$r['description']}' class='form-control'/><br/>
			<label>Newspaper Logo</label><br/>
			<div class='alert alert-warning'>
				<p>To change the advert size image select a new file else leave the file input field empty</p>
			</div>
				<input type='file' name='file1' id='file1' class='form-control'/><br/>
				<input type='hidden' name='id' id='id' value='{$id}'/><br/>
			<button type='submit' name='submit' class='btn btn-info btn-rounded'>Update</button>";
		}

	}
?>