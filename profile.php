<?php

	ob_start();
	require_once("includes/functions.php");
	if(!isset($_SESSION['username']))
	{
		header("location:login.php");
	}


?>
<!DOCTYPE html>
<html lang="en" class="app">
<head>  
  <meta charset="utf-8" />
  <title>Classified :: Register</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/icon.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />
  <link rel="stylesheet" href="css_date/bootstrap-datepicker3.css" type="text/css" />
  <link rel="stylesheet" href="js/calendar/bootstrap_calendar.css" type="text/css" />	

  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
  <style>
	.req	{color:red}
  </style>
</head>
<body onload="show_profile()">
  <section class="vbox">
    <header class="bg-primary header header-md navbar navbar-fixed-top-xs box-shadow">
      <div class="navbar-header aside-md dk">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
          <i class="fa fa-bars"></i>
        </a>
        <a href="index.php" class="navbar-brand">
          <img src="images/logo.PNG"  alt="scale" height="200" width="50">
          <span class="hidden-nav-xs">Classified</span>
        </a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
          <i class="fa fa-cog"></i>
        </a>
      </div> 
      <ul class="nav navbar-nav hidden-xs nav-user user pull-right">
		<li>
          <a href="landing.php" class="dropdown-toggle">
            <i class="i i-home"></i> Our publications
          </a>
		</li>		
		<li  class="active">
          <a href="profile.php" class="dropdown-toggle">
            <i class="i i-user3"></i> My account
          </a>
		</li>		<li>
          <a href="contact.php" class="dropdown-toggle">
            <i class="i i-phone"></i> Contact us
          </a>
		</li>		<li>
          <a href="login.php" class="dropdown-toggle">
            <i class="i i-support"></i> Help page
          </a>
		</li>		<li>
          <a href="register.php" class="dropdown-toggle">
            <i class="i i-pencil"></i> Register
          </a>
		</li>
      </ul> 	  
    </header>
    <section>
      <section class="hbox stretch">
        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder"><br/> 
					<div class="container">
						<div class="container">
							<div class="panel b-a" style="padding:20px;min-height:500px">
								<div id="update_msg"></div>
								<div class="row" id="paste_profile">
								
								</div>
							</div>
							<!--</form>-->
						</div>
                    </div>
                </section>
              </section>
            </section>

          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
      </section>
    </section>
  </section>
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <script src="js_date/bootstrap-datepicker.js"></script>
  <!-- App -->
  <script src="js/app.js"></script>

  <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
  <script src="js/charts/sparkline/jquery.sparkline.min.js"></script>
  <script src="js/charts/flot/jquery.flot.min.js"></script>
  <script src="js/charts/flot/jquery.flot.tooltip.min.js"></script>
  <script src="js/charts/flot/jquery.flot.spline.js"></script>
  <script src="js/charts/flot/jquery.flot.pie.min.js"></script>
  <script src="js/charts/flot/jquery.flot.resize.js"></script>
  <script src="js/charts/flot/jquery.flot.grow.js"></script>
  <script src="js/charts/flot/demo.js"></script>

  <script src="js/calendar/bootstrap_calendar.js"></script>
  <script src="js/calendar/demo.js"></script>

  <script src="js/sortable/jquery.sortable.js"></script>
  <script src="js/app.plugin.js"></script>

  <script>
	function show_profile()
	{
		$.get("handler/get_user_profile.php",function(response){
			$('#paste_profile').html(response);
		})
	}
	$('#edit_form33').submit(function(e){
		e.preventDefault();

		var fname,lname,title,email,phone;
		fname = $('#fname').val();
		lname = $('#lname').val();
		title = $('#title').val();
		phone = $('#phone').val();
		if(fname=="" || lname=="" || title=="" || phone=="")
		{
			if(fname=="")
			{
				document.getElementById("fname").style.border="1px solid red";
			}			
			if(lname=="")
			{
				document.getElementById("lname").style.border="1px solid red";
			}			
			if(title=="")
			{
				document.getElementById("title").style.border="1px solid red";
			}						
			if(phone=="")
			{
				document.getElementById("phone").style.border="1px solid red";
			}
		}
		else
		{
			alert("am ready");
				/*$.ajax({
					url:"handler/update.php",
					type:"POST",
					data: new FormData(this),
					cache:false,
					contentType:false,
					processData:false,
					success:function(data)
					{
						alert(data);
						if(data=="updated")
						{
							$('#update_msg').html("<div class='alert alert-success'>Your profile has been updated successfully</div>");
							show_profile();
						}
						else
						{
							$('#update_msg').html("<div class='alert alert-danger'>"+data+"</div>");
						}
					}
				})*/
		}
	})
	function update()
	{
		var fname,lname,title,email,phone,addr,country,city;
		fname = $('#fname').val();
		lname = $('#lname').val();
		title = $('#title').val();
		phone = $('#phone').val();
		addr = $('#addr').val();
		country = $('#country').val();
		city = $('#city').val();
		if(fname=="" || lname=="" || title=="" || phone=="")
		{
			if(fname=="")
			{
				document.getElementById("fname").style.border="1px solid red";
			}			
			if(lname=="")
			{
				document.getElementById("lname").style.border="1px solid red";
			}			
			if(title=="")
			{
				document.getElementById("title").style.border="1px solid red";
			}						
			if(phone=="")
			{
				document.getElementById("phone").style.border="1px solid red";
			}
		}
		else
		{
			$.post("handler/update.php",{fname:fname,lname:lname,title:title,phone:phone,addr:addr,country:country,city:city},function(response){
						if(response=="updated")
						{
							$('#update_msg').html("<div class='alert alert-success'>Your profile has been updated successfully</div>");
							show_profile();
						}
						else
						{
							$('#update_msg').html("<div class='alert alert-danger'>"+response+"</div>");
						}
			})
		}
	}
  </script>
</body>
</html>