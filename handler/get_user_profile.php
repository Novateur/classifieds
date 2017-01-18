<?php
	require_once("../includes/db.inc");
	require_once("../includes/functions.php");
	
	
	$sql = "SELECT * FROM users WHERE email='{$_SESSION['username']}'";
	$query = $connection->query($sql);
	if($query->rowCount()>0)
	{
		$query->setFetchMode(PDO::FETCH_ASSOC);
		foreach($query as $r)
		{
			echo"<form id='edit_form33'>";
			echo"<div class='col-sm-6'>";
				echo"<h2>Personal details</h2>";
				echo"<p>Title</p>";
				echo"<select class='form-control input-lg' name='title' id='title'>
					<option value='{$r['title']}'>{$r['title']}</option>
					<option value='Mr'>Mr.</option>
					<option value='Miss'>Miss</option>
					<option value='Mrs'>Mrs</option>
					<option value='Dr'>Dr</option>
					<option value='Prof'>Prof</option>
					<option value='Engr'>Engr</option>
				</select><br/>";
				echo"<p>First Name</p>";
				echo "<input type='text' class='form-control input-lg' value='{$r['first_name']}' name='fname' id='fname'/><br/>";
				echo"<p>Last Name</p>";
				echo "<input type='text' class='form-control input-lg' value='{$r['last_name']}' name='lname' id='lname'/><br/>";
			echo"</div>";
			echo"<div class='col-sm-6'>";
				echo"<h2>Contact details</h2>";
				echo"<p>Email</p>";
				echo "<input type='text' class='form-control input-lg' value='{$r['email']}' name='email' id='email' disabled/><br/>";
				echo"<p>Phone number</p>";
				echo "<input type='text' class='form-control input-lg' value='{$r['phone']}' name='phone' id='phone'/><br/>";
				echo"<p>Address</p>";
				echo "<input type='text' class='form-control input-lg' value='{$r['addr']}' name='addr' id='addr'/><br/>";
				echo"<p>City</p>";
				echo "<input type='text' class='form-control input-lg' value='{$r['city']}' name='city' id='city'/><br/>";
				echo"<p>Country</p>";
				echo "<input type='text' class='form-control input-lg' value='{$r['country']}' name='country' id='country'/><br/>";
			echo"</div>";
			echo"<div align='center'><button class='btn btn-info btn-lg btn-rounded' type='button' onclick=\"update()\">Update</button></div>";
			echo "</form>";
		}

	}
	else
	{
		echo "<h3>Sorry we couldn't fetch your profile</h3>";
	}
?>