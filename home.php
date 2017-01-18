<?php

	ob_start();
	require_once("includes/functions.php");

?>
<!DOCTYPE html>
<html lang="en" class="app">
<head>  
  <meta charset="utf-8" />
  <title>Classified :: Home</title>
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
	if(isset($_GET['newspaper']) && !empty($_GET['newspaper']))
	{
		$name = sanitize($_GET['newspaper']);
		$logo = get_newspaper_logo($name);
		$desc = get_newspaper_description($name);
	}
	else
	{
		header("location:landing.php");
	}
  echo "<body onload=\"fetch_newspaper_sections('{$name}')\">";
  ?>
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
		<li class="active">
          <a href="landing.php" class="dropdown-toggle">
            <i class="i i-home"></i> Our publications
          </a>
		</li>		
		<li>
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
							<div class="well well-sm">
								<div class="row">
									<div class='col-sm-6'>
										<img src="logos/<?php echo $logo; ?>" width="300" height="100"/>
									</div>
									<div class='col-sm-6'>
										<?php
											echo "<h4>".$desc."</h4><br/>";
										?>
										<a href="login.php" data-role="button" class="btn btn-info btn-sm">Login</a>&nbsp;&nbsp;
										<a href="register.php" data-role="button" class="btn btn-info btn-sm">Register</a>
									</div>
								</div>
							</div>							
							<div class="row">
								<div class="col-sm-8">
									<h4 style="margin-left:20px">Select your section and category</h4>
								</div>								
								<div class="col-sm-4">
								</div>
							</div>
							<form id="select_size_form">
							<div class="well well-sm">
								<div class="row"style="margin-top:10px">
									<div class="col-sm-4">
										<?php
											echo "<select class='form-control input-lg' id='section' name='section' onchange=\"select_section(this.value,'{$name}')\">

											</select>";
										?>
									</div>								
									<div class="col-sm-4">
										<?php
											echo "<select class='form-control input-lg' id='cat' name='cat' style='display:none' onchange=\"show_size(this.value,'{$name}')\">

											</select>";
										?>
									</div>									
									<div class="col-sm-4">

									</div>
								</div>								
								<div class="row" align="center"><br/>
									<div class='col-sm-12'>
										<input type="hidden" name="price" id="price"/>
										<div id="size_msg">
											
										</div>
									</div>
								</div>								
								<div class="row" id="sizes">

								</div>
								<div class="row"><br/>
									<div class="col-sm-2">
										<button type="button" class="btn btn-info btn-rounded" style="display:block" onclick="window.history.back()" id="next_btn">Back</button>
									</div>
									<div class="col-sm-2">
										<button type="button" class="btn btn-info btn-rounded" style="display:block" id="next_btn" onclick="go_next()">Next</button>
									</div>
								</div>
							</div>
							</form>
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
	function select_section(val,name)
	{
		$.post("handler/fetch_newspaper_category.php",{val:val,name:name},function(response){
			$('#cat').html(response);
			document.getElementById("cat").style.display="block";
			//alert(response);
		})
	}
	function show_size(cat,name)
	{

		var section = $('#section').val();
		//alert(section+" "+cat);
		if(section=="" || cat=="")
		{
			if(secttion=="")
			{
				document.getElementById("section").style.border="1px solid red";
			}			
			if(cat=="")
			{
				document.getElementById("cat").style.border="1px solid red";
			}
		}
		else
		{
			//alert(name+"  "+section);
			$('#sizes').html("<div class='text-center'><img src='loader/loader_2.gif'/></div>");
			if(cat=="Any")
			{
				$.post("handler/fetch_all_adsize.php",{name:name,section:section},function(response){
					$('#sizes').html(response);
				})
			}
			else
			{
				$.post("handler/get_adsize.php",{name:name,section:section,cat:cat},function(response){
					$('#sizes').html(response);
				})
			}
		}
	}
	function go_next()
	{
		var section = $('#section').val();
		var cat = $('#cat').val();
		var size = $('input:radio[name=size]:checked').val();
		if(section=="" || cat=="" || size==null)
		{
			if(section=="")
			{
				document.getElementById("section").style.border="1px solid red";
			}			
			if(cat=="")
			{
				document.getElementById("cat").style.border="1px solid red";
			}			
			if(size==null)
			{
				$('#size_msg').html("<div class='alert alert-danger'>Select an advert size</div>");
				
			}
		}
		else
		{
			localStorage.setItem("section",section);
			localStorage.setItem("cat",cat);
			localStorage.setItem("size",size);
			location.assign("add_details.php");
		}
	}
	function fetch_newspaper_sections(name)
	{
		$.post("handler/fetch_newspaper_sections.php",{name:name},function(response){
			$('#section').html(response);
			//alert(response);
		})
	}
  </script>
</body>
</html>