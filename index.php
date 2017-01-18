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
		<li class="active">
          <a href="index.php" class="dropdown-toggle">
            <i class='glyphicon glyphicon-home'></i> Home
          </a>
		</li>		
		<li>
          <a href="login.php" class="dropdown-toggle">
            <i class="i i-paperplane"></i> Apply
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
							<!--<div class="row">-->

									<div id="myCarousel" class="carousel slide" data-ride="carousel">
									  <!-- Indicators -->
									  <ol class="carousel-indicators">
										<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel" data-slide-to="1"></li>
										<li data-target="#myCarousel" data-slide-to="2"></li>
									  </ol>

									  <!-- Wrapper for slides -->
									  <div class="carousel-inner" role="listbox">
										<div class="item active">
											<img src="images/school.png" alt="Slide1">
										    <div class="carousel-caption">
												<h2>Slide1</h2>
												<h4>Image description for slide1 goes here</h4>
											</div>
										</div>

										<div class="item">
										  <img src="images/school.png" alt="Slide2">
										  	<div class="carousel-caption">
												<h2>Slide2</h2>
												<h4>Image description for slide2 goes here</h4>
											</div>
										</div>

										<div class="item">
										  <img src="images/school.png" alt="Slide3">
											<div class="carousel-caption">
												<h2>Slide3</h2>
												<h4>Image description for slide3 goes here</h4>
											</div>
										</div>
									  </div>

									  <!-- Left and right controls -->
									  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									  </a>
									  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									  </a>
									</div>
							<!--</div>-->
					<div class="container">
						<div class="row">
							<h2 style="text-align:center"><i class="i i-gauge"></i> RECENTLY PUBLISHED</h2>
						</div>						
						<div class="row"><br/>
							<p class="text-center">Change of Name</p>
							<div id="paste_change">
							</div>
						</div>						
						<div class="row"><br/>
							<p class="text-center">Loss of document</p>
							<div id="paste_lost_document">
							</div>
						</div>						
						<div class="row"><br/>
							<p class="text-center">Announcement</p>
							<div id="paste_announcement">
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
	function get_recents()
	{
		$.get("handler/get_change_of_name.php",function(response){
			$('#paste_change').html(response);
		})		
		$.get("handler/get_lost_document.php",function(response){
			$('#paste_lost_document').html(response);
		})		
		$.get("handler/get_announcement.php",function(response){
			$('#paste_announcement').html(response);
		})
	}
  </script>
</body>
</html>