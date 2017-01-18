<?php

	ob_start();
	//require_once("includes/functions.php");

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
  <link rel="stylesheet" href="js/datepicker/datepicker.css" type="text/css" />  
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
<body>
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
							<div class="row"style="margin-top:10px">
								<div class="col-sm-3">
								</div>
								<div class="col-sm-12">
									<section class="panel panel-default animated fadeInRight" style="padding-bottom:10px;margin-top:0px">
										<!--</header>-->
										<form id="register_form">
											<div id="first_set">
												<div class="panel-body"><br/>
													
														<div class="row">
															<div class="col-sm-12">
																<div class="col-sm-12">
																	<p><b>ACCOUNT</b><span class="pull-right"><a href='login.php' class='req'>Sign in</a></span></p>
																	<h3>CREATE YOUR ACCOUNT</h3><hr/>
																</div>
															</div>
														</div>
													<div class="col-sm-6">
														<div class="row">
															<div class="col-sm-12">
																<div class="col-sm-12">
																	<div id="error_msg">
																	
																	</div>
																</div>
															</div>
															<div class="col-sm-12">
																<div class="col-sm-12">
																	<select class="form-control input-lg" name="title" id="title">
																		<option value="">Choose a title</option>
																		<option value="Mr">Mr.</option>
																		<option value="Miss">Miss</option>
																		<option value="Mrs">Mrs</option>
																		<option value="Dr">Dr</option>
																		<option value="Prof">Prof</option>
																		<option value="Engr">Engr</option>
																	</select>
																</div>
															</div>
															<div class="col-sm-12"><br/>
																<div class="col-sm-12">
																	<input type="text"  class="form-control input-lg" placeholder="First Name" name="fname" id="fname">
																</div>
															</div>														
															<div class="col-sm-12"><br/>
																<div class="col-sm-12">
																	<input type="text"  class="form-control input-lg" placeholder="Last Name" name="lname" id="lname">
																</div>
															</div>														
															<div class="col-sm-12"><br/>
																<div class="col-sm-12">
																	<input type="email"  class="form-control input-lg" placeholder="Email" name="email" id="email">
																</div>
															</div>
															<div class="col-sm-12"><br/>
																<div class="col-sm-12">
																	<div id="password_msg">
																	
																	</div>
																</div>
															</div>														
															<div class="col-sm-12">
																<div class="col-sm-12">
																	<input type="password"  class="form-control input-lg" placeholder="Password" name="password" id="password" onkeyup="check_strong(this.value)">
																</div>
															</div>														
															<div class="col-sm-12"><br/>
																<div class="col-sm-12">
																	<input type="password"  class="form-control input-lg" placeholder="Confirm password" name="password1" id="password1" onkeyup="check_passmatch()">
																</div>
															</div>																																									
														</div>	
														<div class="row"><br/>
															<div class='col-sm-12'>
																<div class='col-sm-12'>
																	<button type="submit" class="btn btn-info form-control btn-lg" style="margin-right:15px">CREATE ACCOUNT</button>
																</div>
															</div>
														</div>
													</div>													
													<div class="col-sm-6">
														<div class="row">
															<div class="col-sm-12">
																<div class="col-sm-12">
																	<input type="text"  class="form-control input-lg" placeholder="Phone Number" name="phone" id="phone">
																</div>
															</div>
															<div class="col-sm-12"><br/>
																<div class="col-sm-12">
																	<input type="text"  class="form-control input-lg" placeholder="Line of address" name="addr" id="addr">
																</div>
															</div>														
															<div class="col-sm-12"><br/>
																<div class="col-sm-12">
																	<input type="text"  class="form-control input-lg" placeholder="City" name="city" id="city">
																</div>
															</div>																												
															<div class="col-sm-12"><br/>
																<div class="col-sm-12">
																	<input type="text"  class="form-control input-lg" placeholder="Country" name="country" id="country">
																</div>
															</div>														
														</div>
													</div>
												</div>
												<!--<header class="panel-heading font-bold" style="padding:30px">-->
													<div class="form-group " style="margin-top:-10px;float:right">
														<div class="col-sm-4 col-sm-offset-2">
															
														</div>
													</div>
												<!--</header>-->
											</div>
										</form>
									</section>
								</div>
								<div class="col-sm-3">
								</div>
							</div>
						</div>
                    </div>
					<div class="col-sm-12">
						<div id="paste_vendors2">
						
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
  <!-- App -->
  <script src="js/app.js"></script>
  <script src="js/datepicker/bootstrap-datepicker.js"></script> 
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
	function check_passmatch()
	{
		var pass = $('#password').val();
		var pass1 = $('#password1').val();
		if(pass!="")
		{
			if(pass==pass1)
			{
				$('#password_msg').html("");
			}
			else
			{
				$('#password_msg').html("<div class='alert alert-danger'><i class='i i-notice'></i> Both password do not match</div>");
			}
		}
		else
		{
			$('#password_msg').html("<div class='alert alert-danger'><i class='fa fa-key'></i> Create password  field is required</div>");
		}
	}

	$('#register_form').submit(function(e){
		e.preventDefault();
		
		var first_name = $('#fname').val();
		var last_name = $('#lname').val();
		var email = $('#email').val();
		var pass = $('#password').val();
		var pass1 = $('#password1').val();
		var phone = $('#phone').val();
		var addr = $('#addr').val();
		var city = $('#city').val();
		var post = $('#post').val();
		var country = $('#country').val();
		var title = $('#title').val();
		
		if(first_name=="" || last_name=="" || email=="" || pass=="" || pass1=="" || phone=="" || addr=="" || city=="" || country=="" || title=="")
		{
			if(first_name=="")
			{
				document.getElementById("fname").style.border="1px solid red";
			}		
			if(last_name=="")
			{
				document.getElementById("lname").style.border="1px solid red";
			}		
			if(email=="")
			{
				document.getElementById("email").style.border="1px solid red";
			}		
			if(pass=="")
			{
				document.getElementById("password").style.border="1px solid red";
			}		
			if(pass1=="")
			{
				document.getElementById("password1").style.border="1px solid red";
			}								
			if(phone=="")
			{
				document.getElementById("phone").style.border="1px solid red";
			}			
			if(addr=="")
			{
				document.getElementById("addr").style.border="1px solid red";
			}			
			if(city=="")
			{
				document.getElementById("city").style.border="1px solid red";
			}			
			if(country=="")
			{
				document.getElementById("country").style.border="1px solid red";
			}			
			if(title=="")
			{
				document.getElementById("title").style.border="1px solid red";
			}
		}
		else
		{
			if(pass==pass1)
			{
				$.ajax({
					url:"handler/register.php",
					type:"POST",
					data: new FormData(this),
					cache:false,
					contentType:false,
					processData:false,
					success:function(data)
					{
						//alert(data);
						if(data=="inserted")
						{
							location.assign("landing.php");
						}
						else
						{
							$('#error_msg').html("<div class='alert alert-danger'>"+data+"</div>");
						}
					}
				})
			}
			else
			{
				$('#password_msg').html("<div class='alert alert-danger'><i class='i i-notice'></i> Both password do not match</div>");
			}
		}
	})
	function check_strong(val)
	{
		if(val.length < 8)
		{
			$('#password_msg').html("<div class='alert alert-danger'><i class='i i-notice'></i> Your password must contain atleast 8 characters</div>");
		}
		else if(val.length <= 10)
		{
			$('#password_msg').html("<div class='alert alert-warning'><i class='i i-notice'></i> This is a moderate password</div>");
		}
		else
		{
			$('#password_msg').html("<div class='alert alert-success'><i class='i i-notice'></i> This is a strong password</div>");
		}
	}
  </script>
</body>
</html>