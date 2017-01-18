<!DOCTYPE html>
<head>
	<title>Password test</title>
</head>
<body>
	<div id="length_msg">Must not be less 6</div>
	<div id="number_msg">At least one number</div>
	<div id="letter_msg">Must have a Capital letter</div>
	<div id="character_msg">Must have a valid symbol like !@#$%^&*()_+</div>
	Password: <input type="password" name="pass" id="pass" onkeyup="checkPwd(this.value)"/><br/>
	<div id="email_msg" style="display:none">The email field cannot be empty</div>
	Email: <input type="email" name="email" id="email" /><br/>
	<div id="username_msg" style="display:none">The username field cannot be empty</div>
	Username: <input type="text" name="username" id="username" /><br/>
	<button type="button" onclick="submit_form()">Submit</button>
	<h2>Testing form submission with jquery</h2>
	<form id="jquery_form" onsubmit="check_things()">
		<input type="text" id="ma_text" name="ma_text"/><br/>
		<input type="submit" name="submit" value="submit"/>
	</form>
<script src="js/jquery.min.js"></script>  	
<script>
	function checkPwd(str)
	{
		if(str.search(/\d/) == 1 || str.search(/[A-Z]/) == 1 || str.search(/[^a-zA-Z0-9\!\@\#\$\%\^\&\*\(\)\_\+]/) == 1 || str.length > 0 )
		{

			if (str.search(/\d/) != -1) {
				//return("no_num");
				document.getElementById("number_msg").style.display="none";
			}
			if (str.search(/[A-Z]/) != -1) {
				//return("no_letter");
				document.getElementById("letter_msg").style.display="none";
			}
			if (str.search(/[\!\@\#\$\%\^\&\*\(\)\_\+]/) != -1) {
				//return("bad_char");
				document.getElementById("character_msg").style.display="none";
			}
			if (str.length >=6 ) {
				//return("too_short");
				document.getElementById("length_msg").style.display="none";
			//} else if (str.length > 50) {
				//return("too_long");
				//document.getElementById("pass_msg").innerHTML="too long";
			}
		}
		else
		{
			//alert("ok");
		}
	}
	function submit_form()
	{
		var password = document.getElementById("pass").value;
		var email = document.getElementById("email").value;
		var username = document.getElementById("username").value;
		
		//alert(email+" "+username);
		if(password.search(/\d/) == -1 || password.search(/[A-Z]/) == -1 || password.search(/[^a-zA-Z0-9\!\@\#\$\%\^\&\*\(\)\_\+]/) == -1 || password.length < 6 || email=="" || username=="")
		{
			if (password.search(/\d/) == -1) {
				//return("no_num");
				document.getElementById("number_msg").style.display="block";
			}
			if (password.search(/[A-Z]/) == -1) {
				//return("no_letter");
				document.getElementById("letter_msg").style.display="block";
			}
			if(password.search(/[^a-zA-Z0-9\!\@\#\$\%\^\&\*\(\)\_\+]/) == -1)
			{
				document.getElementById("character_msg").style.display="block";
			}
			if (password.length < 6 ) 
			{
				//return("too_short");
				document.getElementById("length_msg").style.display="block";
			//} else if (str.length > 50) {
				//return("too_long");
				//document.getElementById("pass_msg").innerHTML="too long";
			}			
			if (email=="") 
			{
				//return("too_short");
				document.getElementById("email_msg").style.display="block";
			//} else if (str.length > 50) {
				//return("too_long");
				//document.getElementById("pass_msg").innerHTML="too long";
			}			
			if (username=="") 
			{
				//return("too_short");
				document.getElementById("username_msg").style.display="block";
			//} else if (str.length > 50) {
				//return("too_long");
				//document.getElementById("pass_msg").innerHTML="too long";
			}
		}
		else
		{
			alert("You're good to go");
		}
	}

function check_things(e)
{
	e.preventDefault();
	var input = $('#ma_text').val();
	if (input=="")
	{
		alert("Yuppy");
	}
	else
	{
		document.forms['jquery_form'].submit();
	}
}
	
</script>
</body>
</html>