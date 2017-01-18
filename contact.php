<?php

	ob_start();
	require_once("includes/functions.php");
	if(!isset($_SESSION['username']))
	{
		header("location.login.php");
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
		<li>
          <a href="profile.php" class="dropdown-toggle">
            <i class="i i-user3"></i> My account
          </a>
		</li>		
		<li  class="active">
          <a href="contact.php" class="dropdown-toggle">
            <i class="i i-phone"></i> Contact us
          </a>
		</li>		
		<li>
          <a href="login.php" class="dropdown-toggle">
            <i class="i i-support"></i> Help page
          </a>
		</li>		
		<li>
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
								<div class="row" id="paste_profile">
									<div class="col-sm-6">
										<input type="text" name="name" placeholder="Name" class="form-control"/><br/>
										<input type="text" name="name" placeholder="Phone Number" class="form-control"/><br/>
										<input type="email" name="name" placeholder="Email" class="form-control"/><br/>
										<input type="email" name="name" placeholder="Subject" class="form-control"/><br/>
										<textarea rows="6" class="form-control" name="message_content" id="message_content"></textarea><br/>
										<button class="btn btn-info" type="button">Submit</button>
									</div>									
									<div class="col-sm-6">
										<p><b>For technical assistance only</b><p>
										<p>Telephone<p>

										<p>0207 680 6171</p>
										<p>Lines are open</p>
										<p>Monday - Friday 8am - 6pm</p>
										<p>(excluding Bank Holidays).</p><br/>
										
										<p><b>Contact address</b></p>
										<p>NAIC Building,Right Wing,</p>
										<p>Plot 590,A0,Central Business District</p>
										<p>Abuja,Nigeria.</p>
									</div>
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

  </script>
</body>
</html>