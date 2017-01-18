<?php

	ob_start();
	require_once("includes/functions.php");
?>
<!DOCTYPE html>
<html lang="en" class="app">
<head>  
  <meta charset="utf-8" />
  <title>Classified :: Admin</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/icon.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />   
  <link rel="stylesheet" href="js/calendar/bootstrap_calendar.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
  <style>
	.req	{color:red}
	#loading1 {background:rgba(255,255,255,0.7);height:1600px;width:100%;z-index:5000;top:0px;position:fixed;opacity:1;left:0px}
	#loader {color:black;margin:300px auto;width:80px;height:24px}
  </style>
</head>
<?php echo "<body>"; ?>
  <div id="loading1"style='display:none'><div id="loader"><img src="loader/hh.gif"/></div></div>
  <section class="vbox">
    <header class="bg-primary header header-md navbar navbar-fixed-top-xs box-shadow">
      <div class="navbar-header aside-md dk">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
          <i class="fa fa-bars"></i>
        </a>
        <a href="index.php" class="navbar-brand">
          <img src="images/logo.PNG"  alt="scale" height="200" width="50">
          <span class="hidden-nav-xs">Admin</span>
        </a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
          <i class="fa fa-cog"></i>
        </a>
      </div>
      <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="thumb-sm avatar pull-left">
          </a>
          <ul class="dropdown-menu animated fadeInRight">            
            <li>
              <span class="arrow top"></span>
              <a href="#" onclick="show_profile()">User settings</a>
            </li>
            <li>
              <a href="docs.html">Help</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="logout.php" >Logout</a>
            </li>
          </ul>
        </li>
      </ul>      
    </header>
	<div id="response_msg"style='display:none;z-index:3000000;margin-top:0px;color:white;position:absolute;background:rgba(0,0,0,0.3);margin-left:600px;padding:10px;border-radius:3px;font-size:17px;font-style:italic'></div>
    <section>
      <section class="hbox stretch">

        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder"><br/>              
					<div class="col-sm-3">
						
                    </div>
					
					<div class="col-sm-6" style="margin-top:100px">
					<h1>Admin Login</h1>
						<div class="well well-sm">
							<h3>Login</h3>
							<?php
								if(isset($_POST['submit']))
								{
									$email_msg ="";
									$password_msg ="";
									$email = $_POST['email'];
									$password = $_POST['password'];
									
									if($email=="" || $password=="")
									{
										if($email=="")
										{
											$email_msg ="Your email address is required";
										}										
										if($password=="")
										{
											$password_msg ="Your password is required";
										}
									}
									else
									{
										if($email!="admin@classified.com" && $password!="classifiedadmin")
										{
											echo"<div class='alert alert-warning'>Incorrect email/password combination</div>";
										}
										else
										{
											$_SESSION['admin_username']=$email;
											header("location:admin_index.php");
										}
									}
								}
							?>
							<form action="" method="post">
								<div class="req"><?php if(isset($_POST['submit'])){echo $email_msg; }?></div>
								<input type="text" name="email" id="email" class="form-control" placeholder="Email"/><br/>
								<div class="req"><?php if(isset($_POST['submit'])){echo $password_msg; }?></div>
								<input type="password" name="password" id="password" class="form-control" placeholder="Password"/><br/>
								<button type="submit" class="btn btn-info btn-rounded" name="submit" id="submit">Submit</button>
							</form>
						</div>
					</div>					
					<div class="col-sm-3" >
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
			<div id="delete_multi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog" style="max-height:90px">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<p class="modal-title" id="myModalLabel"style="font-size:13px"><h4><i class="i i-trashcan"></i> Confirm</h4></p>
						</div>
						<div class="modal-body" style='font-size:14px'>
							Are you sure you want to perform a multiple delete task,once you proceed with this action there is no going back
						</div>
						<div class="modal-footer">
							<button class="btn btn-default btn-rounded" data-dismiss="modal" aria-hidden="true">Cancel</button>
							<span id='paste_multi_proceed_btn'></span>
							<!--<button class="btn btn-danger" id="cont_del_multi_btn" onclick="cont_del_multi(this.value)">Proceed</button>-->
						</div>
					</div>
				</div>
			</div>
  			<div id="delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog" style="width:400px">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<p class="modal-title" id="myModalLabel"style="font-size:13px"><h4><i class="i i-trashcan"></i> Delete</h4></p>
						</div>
						<div class="modal-body" style='font-size:14px'>
							Do you really want to delete this advert space ?
						</div>
						<div class="modal-footer">
							<button class="btn btn-default btn-rounded" data-dismiss="modal" aria-hidden="true">Cancel</button>
							<span id="proceed_btn"></span>
						</div>
					</div>
				</div>
			</div>
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
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