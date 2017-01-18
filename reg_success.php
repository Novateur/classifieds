<?php

	ob_start();
	//require_once("includes/functions.php");

?>
<!DOCTYPE html>
<html lang="en" class="app">
<head>  
  <meta charset="utf-8" />
  <title>Payment :: Verify account</title>
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
    <header class="bg-danger header header-md navbar navbar-fixed-top-xs box-shadow">
      <div class="navbar-header aside-md dk">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
          <i class="fa fa-bars"></i>
        </a>
        <a href="index.php" class="navbar-brand">
          <img src="images/logo.PNG"  alt="scale" height="200" width="50">
          <span class="hidden-nav-xs">Payment</span>
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
								<div class="col-sm-4">
								</div>
								<div class="col-sm-4">
									<section class="panel panel-default animated fadeInRight" style="padding-bottom:10px;margin-top:20px">
										<!--</header>-->
										<form id="verify_form">
											<div id="first_set">
												<div class="panel-body"><br/>
													<div class="row">
														<div class="col-sm-12">
															<div class="col-sm-12">
																<p><b>ACCOUNT</b></p>
																<h4>THANK YOU</h4><hr/>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-12">
															<div class="col-sm-12">
																<p>An email with instructions has been sent to you</p>
																<p>#Your email goes here</p>
															</div>
														</div>
													</div>
													<div class="row"><br/>
														<div class="col-sm-12">
															<div class="col-sm-12">
																<div class="alert alert-danger">
																	You need to check your mail to verify your email and activate your account
																</div>
															</div>
														</div>
													</div>	
													<div class="row"><br/>
														<div class='col-sm-12'>
															<div class='col-sm-12'>
																<button type="submit" class="btn btn-primary form-control btn-lg" onclick="process1()" style="margin-right:15px">BACK TO LOGIN</button>
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
								<div class="col-sm-4">
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
	// some nonsense scripts goes here
  </script>
</body>
</html>