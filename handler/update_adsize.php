<?php
	require_once("../includes/db.inc");
	require_once("../includes/functions.php");
	
	$price = sanitize($_POST['price']);
	$desc = sanitize($_POST['desc']);
	$id = sanitize($_POST['id']);
	$image=basename($_FILES['file1']['name']);
	
	if($image=="")
	{
		$sql="UPDATE adsize SET price='{$price}',description='{$desc}' WHERE id='{$id}'";
		$query=$connection->query($sql);
		if($query)
		{
			echo "updated";
		}
		else
		{
			echo "Error: An error occured while trying to update the new details";
		}
	}
	else
	{
		$tmp_file2=$_FILES['file1']['tmp_name'];
		$target_file2=basename($_FILES['file1']['name']);
		$size=$_FILES['file1']['size'];
		$type=$_FILES['file1']['type'];
		$extension=strtolower(substr($target_file2,strpos($target_file2,'.')+1));
		
		$rename = rand(0,10000)."LOGO".rand(0,10000).".".$extension;
		
		if($extension=="jpg" || $extension=="jpeg" || $extension=="png" && $size<=2000000)
		{
			$upload_dir2="../adsize";
			$db_upload=move_uploaded_file($tmp_file2, $upload_dir2."/".$rename);
			$sql="UPDATE adsize SET price='{$price}',description='{$desc}',image='{$rename}' WHERE id='{$id}'";
			$query=$connection->query($sql);
			if($query)
			{
				echo "updated";
			}
			else
			{
				echo "Error: An error occured while trying to update the new details";
			}
		}
		else
		{
			echo "Error: Uploaded file must be less than or equal to 2MB and must be in .png or .jpg or .jpeg format";
		}
	}
?>