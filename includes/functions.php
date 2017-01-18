<?php
session_start();
require_once("db.inc");

function sanitize($input)
{
	$my_input=htmlspecialchars(addslashes(trim($input)));
	return $my_input;
}

function get_time_interval_sm($date){
	$mydate=date("Y-m-d H:i:s");
	$theDiff="";
	$datetime1 = date_create($date);
	$datetime2 = date_create($mydate);
	$interval = date_diff($datetime1, $datetime2);
	$min = $interval->format('%i');
	$sec = $interval->format('%s');
	$hour = $interval->format('%h');
	$mon = $interval->format('%m');
	$day = $interval->format('%d');
	$year = $interval->format('%y');
	if($interval->format('%i%h%d%m%y')=="00000"){
		if($sec<10){
			return "just now";
		}
		else{
			return $sec." secs ";
		}
	}
	else if($interval->format('%h%d%m%y')=="0000"){
		if($min==1){
			return $min." min";
		}
		else{
			return $min." mins";
		}
	}
	else if($interval->format('%d%m%y')=="000"){
		if($hour==1){
			return $hour." hr";
		}
		else{
			return $hour." hrs";
		}
	}
	else if($interval->format('%m%y')=="00"){
		if($day==1){
			return $day." day";
		}
		else{
			return $day." days";
		}
	}
	else if($interval->format('%y')=="0"){
		if($mon==1){
			return $mon." mth";
		}
		else{
			return $mon." mths";
		}
	}
	else{
		if($year==1){
			return $year." yr";
		}
		else{
			return $year." yrs";
		}
	}
}

function check_email($email)
{
	global $connection;
	$sql="SELECT email FROM users WHERE email='{$email}'";
	$query=$connection->query($sql);
	if($query->rowCount()>0)
	{
		return true;
	}
	else
	{
		return false;
	}
	
}

function get_newspaper_logo($name)
{
	global $connection;
	$sql="SELECT logo FROM newspapers WHERE name_newspaper='{$name}'";
	$query=$connection->query($sql);
	if($query->rowCount()>0)
	{
		$query->setFetchMode(PDO::FETCH_ASSOC);
		foreach($query as $r)
		{
			return $r['logo'];
		}
	}
}

function get_newspaper_description($name)
{
	global $connection;
	$sql="SELECT description FROM newspapers WHERE name_newspaper='{$name}'";
	$query=$connection->query($sql);
	if($query->rowCount()>0)
	{
		$query->setFetchMode(PDO::FETCH_ASSOC);
		foreach($query as $r)
		{
			return $r['description'];
		}
	}
}

function get_select_newspaper()
{
	global $connection;
	$sql="SELECT * FROM newspapers";
	$query=$connection->query($sql);
	if($query->rowCount()>0)
	{
		$query->setFetchMode(PDO::FETCH_ASSOC);
		echo "<option value=''>--Select newspaper--</option>";
		foreach($query as $r)
		{
			echo "<option value='{$r['name_newspaper']}'>{$r['name_newspaper']}</option>";
		}
	}
}

function get_select_newspaper_admin()
{
	global $connection;
	$sql="SELECT * FROM newspapers";
	$query=$connection->query($sql);
	if($query->rowCount()>0)
	{
		$query->setFetchMode(PDO::FETCH_ASSOC);
		echo "<option value='all'>--All newspaper--</option>";
		foreach($query as $r)
		{
			echo "<option value='{$r['name_newspaper']}'>{$r['name_newspaper']}</option>";
		}
	}
}

function get_select_newspaper_section()
{
	global $connection;
	$sql="SELECT * FROM newspapers";
	$query=$connection->query($sql);
	if($query->rowCount()>0)
	{
		$query->setFetchMode(PDO::FETCH_ASSOC);
		
		foreach($query as $r)
		{
			echo "<div class='checkbox i-checks'>
                    <label>
                        <input type='checkbox' name='newspaper[]' value='{$r['name_newspaper']}' class='ma_newspaper'>
                        <i></i>
						{$r['name_newspaper']}
                    </label>
            </div>";
		}
	}
}

function get_select_section()
{
	global $connection;
	$sql="SELECT * FROM section";
	$query=$connection->query($sql);
	if($query->rowCount()>0)
	{
		$query->setFetchMode(PDO::FETCH_ASSOC);
		echo "<option value='all'>--All newspaper--</option>";
		foreach($query as $r)
		{
			echo "<option value='{$r['id']}'>{$r['section_name']}</option>";
		}
	}
}