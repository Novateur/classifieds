<?php

	ob_start();
	//require_once("includes/functions.php");

?>
<!DOCTYPE html>
<html lang="en" class="app">
<head>  
  <meta charset="utf-8" />
  <title>Payment :: Login</title>
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
<?php
	echo "<body onload=\"get_recents()\">";
?>
  <section class="vbox">
    <header class="bg-primary header header-md navbar navbar-fixed-top-xs box-shadow">
      <div class="navbar-header aside-md dk">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
          <i class="fa fa-bars"></i>
        </a>
        <a href="index.php" class="navbar-brand">
          <img src="images/logo.PNG"  alt="scale" height="200" width="50">
          <span class="hidden-nav-xs">Clasified</span>
        </a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
          <i class="fa fa-cog"></i>
        </a>
      </div>
      <ul class="nav navbar-nav hidden-xs nav-user user pull-right">
		<li>
          <a href="index.php" class="dropdown-toggle">
            <i class='glyphicon glyphicon-home'></i> Home
          </a>
		</li>		
		<li class="active">
          <a href="apply_for_name.php" class="dropdown-toggle">
            Apply for a new name
          </a>
		</li>		
		<li>
          <a href="login.php" class="dropdown-toggle">
            Apply for loss of document
          </a>
		</li>		
		<li>
          <a href="login.php" class="dropdown-toggle">
            Apply for an announcement
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
                <section class="scrollable padder">
					<div class="container">
							<div class="row" style="margin-top:10px">
								<div class="col-sm-12">
									<div class="alert alert-info">
										<h3>Apply for change of name</h3>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<section class="panel panel-default animated fadeInRight" style="padding-bottom:10px;margin-top:0px">
										<!--</header>-->
										<form id="change_name_form">
											<div id="first_set">
												<div class="panel-body"><br/>
													<div class="row">
														<div class="col-sm-12">
															<div class="col-sm-12">
																<h4>INPUT YOUR DETAILS</h4>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-12">
															<div class="col-sm-12">
																<div id="error_msg">
																
																</div>
															</div>
														</div>															
														<div class="col-sm-12">
															<div class="col-sm-12">
																<input type="text"  class="form-control input-lg" placeholder="Former Name" name="former_name" id="former_name" onkeyup="update_former_prev(this.value)">
															</div>
														</div>														
														<div class="col-sm-12"><br/>
															<div class="col-sm-12">
																<input type="text"  class="form-control input-lg" placeholder="Current Name" name="current_name" id="current_name" onkeyup="update_current_prev(this.value)">
															</div>
														</div>														
														<div class="col-sm-12"><br/>
															<div class="col-sm-12">
																<select name="size" id="size" class="form-control">
																	<option value="">--Select a display size--</option>
																	<option value="1">1x1 col</option>
																	<option value="2">2x1 col</option>
																	<option value="3">2x2 col</option>
																	<option value="4">3x2 col</option>
																</select>
															</div>
														</div>														
													</div>	
													<div class="row"><br/>
														<div class='col-sm-12'>
															<div class='col-sm-12'>
																<button type="submit" class="btn btn-info form-control btn-lg" style="margin-right:15px">SUBMIT</button>
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
								<div class="col-sm-6">
									<section class="panel panel-default animated fadeInRight" style="padding:10px;margin-top:0px">
										<h4>I, formerly known as <b><span id='prev_former_name'>Your former name goes here</span></b> now wishto be known and
										addressed as <b><span id='prev_current_name'>Your current name goes here</span></b>.All documents remain valid, general public should
										please take note</h4>
									</section>
								</div>
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
	$('#change_name_form').submit(function(e){
		e.preventDefault();
		var former_name = $('#former_name').val();
		var current_name = $('#current_name').val();
		var size = $('#size').val();
		
		if(former_name=="" || current_name=="" || size=="")
		{
			if(former_name=="")
			{
				document.getElementById("former_name").style.border="1px solid red";
			}		
			if(current_name=="")
			{
				document.getElementById("current_name").style.border="1px solid red";
			}		
			if(size=="")
			{
				document.getElementById("size").style.border="1px solid red";
			}		

		}
		else
		{
			if(pass==pass1)
			{
				$.ajax({
					url:"handler/apply_for_name.php",
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
							alert("Inserted");
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
	function update_former_prev(input)
	{
		document.getElementById("prev_former_name").innerHTML=input;
	}
  </script>
</body>
</html>