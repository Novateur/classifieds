<?php
	require_once("../includes/db.inc");
	require_once("../includes/functions.php");
	
	$price = sanitize($_POST['price']);
	$desc = sanitize($_POST['desc']);
	$paper = sanitize($_POST['paper']);
	$section = sanitize($_POST['section']);
	$category = sanitize($_POST['category']);
	
	$tmp_file2=$_FILES['file1']['tmp_name'];
	$target_file2=basename($_FILES['file1']['name']);
	$size=$_FILES['file1']['size'];
	$type=$_FILES['file1']['type'];
	$extension=strtolower(substr($target_file2,strpos($target_file2,'.')+1));
	
	$rename = rand(0,10000)."adsize".rand(0,10000).".".$extension;
	
	if($extension=="jpg" || $extension=="jpeg" || $extension=="png" && $size<=2000000)
	{
		$upload_dir2="../adsize";
		$db_upload=move_uploaded_file($tmp_file2, $upload_dir2."/".$rename);
		$sql="INSERT INTO adsize (newspaper,image,price,description,section,category) VALUES ('{$paper}','{$rename}','{$price}','{$desc}','{$section}','{$category}')";
		$query=$connection->query($sql);
		if($query)
		{
			echo "added";
		}
		else
		{
			echo "Error: An error occured while trying to submit your details";
		}
	}
	else
	{
		echo "Error: Uploaded file must be less than or equal to 1MB and must be in .png or .jpg or .jpeg format";
	}
?>