<!DOCTYPE html>
<head>
	<title>Password test</title>
</head>
<body>

	<input type="text" name="pass" id="pass"/>
	<button type="button" onclick="insert()" id="btn">submit</button>

  <script src="js/jquery.min.js"></script>	
<script>
	function insert()
	{
		$('#btn').animate({
			width:"30%",
			opacity:0.4,
			marginLeft:"60px",
			fontSize:"17px"
		},500)
	}
</script>
</body>
</html>