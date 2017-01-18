<?php

	ob_start();
	require_once("includes/functions.php");
	

	
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
<body onload="organize_order()">
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
          <a href="index.php" class="dropdown-toggle">
            <i class="i i-home"></i> Our publications
          </a>
		</li>		
		<li>
          <a href="login.php" class="dropdown-toggle">
            <i class="i i-user3"></i> My account
          </a>
		</li>		<li>
          <a href="login.php" class="dropdown-toggle">
            <i class="i i-phone"></i> Contact us
          </a>
		</li>		<li>
          <a href="login.php" class="dropdown-toggle">
            <i class="i i-support"></i> Help page
          </a>
		</li>		<li>
          <a href="login.php" class="dropdown-toggle">
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
							<div class="col-sm-3">
							</div>	
							<div class="col-sm-6">
									<div class="panel b-a" style="padding:20px">								
										<div class="row">
											<div class="col-sm-12">
												<h1 style="text-align:center">Confirm your advert package</h1>
											</div>
										</div>
										<div class="row"><br/>
											<div class="col-sm-12">
												<div id="paste_info">
													
												</div>
											</div>
										</div>
										<div class="row"><br/>
											<div class="col-sm-2">
												<button type="button" class="btn btn-info btn-rounded" style="display:block" onclick="window.history.back()" id="next_btn">Back</button>
											</div>
											<form id="sub_name">
												<div class="col-sm-2" id="paste_submit_btn">
													<input type="hidden" name="fname" id="fname"/>
													<input type="hidden" name="cname" id="cname"/>
													<input type="hidden" name="date" id="date"/>
													<input type="hidden" name="section" id="section"/>
													<input type="hidden" name="cat" id="cat"/>
													<input type="hidden" name="action" id="action"/>
													<input type="hidden" name="price" id="price"/>
													<button type='submit' class='btn btn-info btn-rounded' style='display:block' id='next_btn'>Next</button>
												</div>
											</form>
										</div>
									</div>
									</form>
								
							</div>
							<div class="col-sm-3">
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
			function PreviewFile() {
			var preview=document.querySelector('#pro');
			var file=document.querySelector('input[type=file]').files[0];
			if(file.size<=5000000 && file.type=="image/jpeg" || file.type=="image/jpg" || file.type=="image/png")
			{
				var reader= new FileReader();
				reader.onloadend=function() {
					preview.src=reader.result;
				}
				if(file) {
					reader.readAsDataURL(file);
				}
				else {
					preview.src="";
				}
			}
			else
			{
				$('#img_msg').html("<div class='alert alert-danger'>The format of selected file is no supported OR The size may be greater than 5MB</div>");
			}
		}
	function organize_order()
	{
		var info="<p><b>Former Name:</b> "+localStorage.former_name+"</p>";
		info+="<p><b>Current Name: </b>"+localStorage.current_name+"</p>";
		info+="<p><b>Selected dates</b></p>";
		var dates = new Array();
		dates = localStorage.date.split(",");
		for(var i = 0;i < dates.length;i++)
		{
			info+=dates[i]+"<br/>";
		}
		info += "<p style='font-size:16px'>Section: "+localStorage.section+"<br/>";
		info+="Category: "+localStorage.cat+"<br/>";
		info+="Action: "+localStorage.action+"<p><hr/>";
		info+="<p style='font-size:17px'>Total price: &#8358;"+localStorage.total_price.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g,"$1,")+"</p><hr/>";
		$('#paste_info').html(info);
	}
  </script>
</body>
</html>