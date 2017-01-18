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
  <title>Classified :: Add details</title>
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
							<div class="panel b-a" style="padding:20px">								
								<div class="row">
									<div class="col-sm-12">
										<h1 style="text-align:center">Select your advert package</h1>
									</div>
								</div>
								<div class="row"><br/>
									<div class="col-sm-4">
										<h4>Choose a package</h4>
										<form id="order_details_form">
											<select class="form-control" name="action" id="action" onchange="select_action(this.value)">
												<option value="">--Select your action--</option>
												<option value="change of name">Change of name</option>
												<option value="loss of document">Loss of document</option>
												<option value="announcement">Public announcement</option>
												<option value="advertisement">Advertisement</option>
											</select><br/>
											
											<div id="name_section" style="display:none">
												<input type="text" class="form-control" placeholder="Former name" name="former_name" id="former_name" onkeyup="update_former_name_preview(this.value)"/><br/>
												<input type="text" class="form-control" placeholder="Current name" name="current_name" id="current_name" onkeyup="update_current_name_preview(this.value)"/><br/>
											</div>											
											<div id="lost_section" style="display:none">
												<input type="text" class="form-control" placeholder="Description of the lost document" name="lost_doc" id="lost_doc" onkeyup="update_lost_doc_preview(this.value)"/><br/>
												<input type="text" class="form-control" placeholder="Belongs to" name="belongs_to" id="belongs_to" onkeyup="update_belongs_to_preview(this.value)"/><br/>
											</div>											
											<div id="announcement_section" style="display:none">
												<textarea class="form-control" id="announcement" name="announcement" rows="6" onkeyup="preview_annoucement(this.value)"></textarea><br/>
												
											</div>
											<div style="display:none">
												<input type="text" class="form-control" placeholder="Name" id="name" name="name"/><br/>
												<input type="text" class="form-control" placeholder="Telephone" id="phone" name="phone"/><br/>
												<input type="email" class="form-control" placeholder="Email" id="email" name="email"/><br/>
												<input type="text" class="form-control" placeholder="Your reference" id="ref" name="ref"/><br/>
												<textarea class="form-control" rows="6" placeholder="Any other specific copy instructions" name="instruction"></textarea>
											</div>
																						
											<h4>Choose days to advertise</h4>
											
											<input type="text" class="datepicker form-control" id="multi_date" placeholder="choose date(s)"><br/>
									</div>
									<div class="col-sm-4">
										<h4>Preview</h4>
										<div class="alert alert-success" id="preview_msg">
											The preview of your any package you select will appear here.
											There maybe some changes during publication. 
										</div>										
										<div id="name_preview" style="display:none">
											<div style="border:2px solid black;padding:5px">
												<p>I,formerly known as <b><span id="former_name_preview">Former Name</span></b> now wish </p>
												<p>to be known as <b><span id="current_name_preview">Current Name</span></b>. All documents </p>
												<p>remains valid,general public should please take note</p>
											</div>
										</div>										
										<div id="lost_preview" style="display:none">
											<div style="border:2px solid black;padding:5px">
												This is to inform the general public of the loss of <b><span id="lost_doc_preview">Lost Material</span></b> belonging to <b><span id="lost_name_preview">Owner's Name</span></b>. 
												All effort to trace the said document proved abortive the general public and 
												authority concern should take note
											</div>
										</div>										
										<div id="announcement_preview" style="display:none">
											<div style="border:2px solid black;padding:5px;height:200px;overflow:auto" id="paste_announcement_preview">
												<p class="text-muted">Your announcement preview goes here</p>
											</div>
										</div>									
										<h5>Package price</h5>
										<div id="paste_price"></div>										
										<h5>Total price</h5>
										<div id="paste_total_price"></div>
									</div>
									<div class="col-sm-4">

									</div>
								</div>
								<div class="row"><br/>
									<div class="col-sm-2">
										<button type="button" class="btn btn-info btn-rounded" style="display:block" onclick="window.history.back()" id="next_btn">Back</button>
									</div>
									<div class="col-sm-2" id="paste_submit_btn">
									</div>
									</form>
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
	        $(document).ready(function () {
			var def_price = localStorage.size;
            $('#paste_total_price').html("<div style='font-size:20px'>&#8358;0.00</div>");
			$('#paste_section').html("<div style='font-size:15px'>"+localStorage.section+"</div>");
			$('#paste_category').html("<div style='font-size:15px'>"+localStorage.cat+"</div>");
			$('#paste_price').html("<div style='font-size:20px'>&#8358;"+def_price.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g,"$1,")+"</div>");    
                $('#multi_date').datepicker({
                    format: "dd/mm/yyyy",
                    multidate:true,
                    multidateSeparator: ",",
                    toggleActive:true
                }).on('changeDate', function(){
        var multi_date = $('#multi_date').val();
		get_price();
    });  
            
            });
	$('#order_details_form').submit(function(e){
		e.preventDefault();
		var colour = $('input:radio[name=colour]:checked').val();
		var name = $('#name').val()
		var phone = $('#phone').val()
		var email = $('#email').val()
		var ref = $('#ref').val()
		alert('advert submiting ooo')
	})
	function get_price()
	{
		var multi_date = $('#multi_date').val();
		if(multi_date=="")
		{
			var def_price =  localStorage.size;
			$('#paste_total_price').html("<div style='font-size:20px'>&#8358;0.00</div>");
			
		}
		else
		{
			$.post("handler/get_multi_date_price.php",{multi_date:multi_date},function(response){
				var myprice = localStorage.size*response;
				var total_price1 = myprice.toFixed(2);
				var total_price = localStorage.setItem("total_price",total_price1);
				//var myprice = response;
				$('#paste_total_price').html("<div style='font-size:20px'>&#8358;"+total_price1.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g,"$1,")+"</div>");
				//$('#paste_price').html(myprice);
			})
		}
	}
	function select_action(val)
	{
		if(val=="advertisement")
		{
			document.getElementById('name_section').style.display="none";
			document.getElementById('name_preview').style.display="none";			
			document.getElementById('announcement_section').style.display="none";
			document.getElementById('announcement_preview').style.display="none";			
			document.getElementById('lost_section').style.display="none";
			document.getElementById('lost_preview').style.display="none";
			//$('#advert_section').slideDown('fast');
			//$('#advert_preview').slideDown('fast');
			$('#paste_submit_btn').html("<button type='button' class='btn btn-info btn-rounded' style='display:block' id='advert_next' onclick=\"submit_advert()\">Next</button>");
		}
		if(val=="change of name")
		{
			//document.getElementById('advert_section').style.display="none";
			//document.getElementById('advert_preview').style.display="none";			
			document.getElementById('announcement_section').style.display="none";
			document.getElementById('announcement_preview').style.display="none";			
			document.getElementById('lost_section').style.display="none";
			document.getElementById('lost_preview').style.display="none";
			$('#name_section').slideDown('fast');
			$('#name_preview').slideDown('fast');
			$('#paste_submit_btn').html("<button type='button' class='btn btn-info btn-rounded' style='display:block' id='next_btn' onclick=\"change_name()\">Next</button>");
		}		
		if(val=="announcement")
		{
			//document.getElementById('advert_section').style.display="none";
			//document.getElementById('advert_preview').style.display="none";
			document.getElementById('name_section').style.display="none";
			document.getElementById('name_preview').style.display="none";			
			document.getElementById('lost_section').style.display="none";
			document.getElementById('lost_preview').style.display="none";
			$('#announcement_section').slideDown('fast');
			$('#announcement_preview').slideDown('fast');
			$('#paste_submit_btn').html("<button type='button' class='btn btn-info btn-rounded' style='display:block' id='next_btn' onclick=\"sub_announcement()\">Next</button>");
		}		
		if(val=="loss of document")
		{
			//document.getElementById('advert_section').style.display="none";
			//document.getElementById('advert_preview').style.display="none";
			document.getElementById('name_section').style.display="none";
			document.getElementById('name_preview').style.display="none";			
			document.getElementById('announcement_section').style.display="none";
			document.getElementById('announcement_preview').style.display="none";
			$('#lost_section').slideDown('fast');
			$('#lost_preview').slideDown('fast');
			$('#paste_submit_btn').html("<button type='button' class='btn btn-info btn-rounded' style='display:block' id='next_btn' onclick=\"alert('Lost')\">Next</button>");
		}
	}
	function update_former_name_preview(val)
	{
		if(val=="")
		{
			$('#former_name_preview').html("Former Name");
		}
		else
		{
			$('#former_name_preview').html(val);
		}
	}	
	function update_current_name_preview(val)
	{
		if(val=="")
		{
			$('#current_name_preview').html("Current Name");
		}
		else
		{
			$('#current_name_preview').html(val);
		}
	}
	function update_lost_doc_preview(val)
	{
		if(val=="")
		{
			$('#lost_doc_preview').html("Lost Material");
		}
		else
		{
			$('#lost_doc_preview').html(val);
		}
	}
	function update_belongs_to_preview(val)
	{
		if(val=="")
		{
			$('#lost_name_preview').html("Owner's Name");
		}
		else
		{
			$('#lost_name_preview').html(val);
		}
	}
	function preview_annoucement(val)
	{
		if(val=="")
		{
			$('#paste_announcement_preview').html("<p class='text-muted'>Your announcement preview goes here</p>");
		}
		else
		{
			$('#paste_announcement_preview').html(val);
		}
	}
	function change_name()
	{
		var action = $('#action').val();
		var former_name = $('#former_name').val();
		var current_name = $('#current_name').val();
		var date = $('#multi_date').val();
		if(date=="" || action=="" || former_name=="" || current_name=="")
		{
			if(date=="")
			{
				document.getElementById("multi_date").style.border="1px solid red";
			}
			if(action=="")
			{
				document.getElementById("action").style.border="1px solid red";
			}			
			if(former_name=="")
			{
				document.getElementById("former_name").style.border="1px solid red";
			}			
			if(current_name=="")
			{
				document.getElementById("current_name").style.border="1px solid red";
			}
		}
		else
		{
			localStorage.setItem("action",action);
			localStorage.setItem("date",date);
			localStorage.setItem("former_name",former_name);
			localStorage.setItem("current_name",current_name);
			location.assign("submit_change_name.php?action="+action);
		}
	}
	function submit_advert()
	{
		var date = $('#multi_date').val();
		var action = $('#action').val();
		if(date=="" || action=="")
		{
			if(date=="")
			{
				document.getElementById("multi_date").style.border="1px solid red";
			}
			if(action=="")
			{
				document.getElementById("action").style.border="1px solid red";
			}
		}
		else
		{
			localStorage.setItem("action",action);
			localStorage.setItem("date",date);
			location.assign("submit_order.php");
		}
	}
	function sub_announcement()
	{
		var announcement = $('#announcement').val();
		var date = $('#multi_date').val();
		var action = $('#action').val();
		if(announcement=="" || date=="" || action=="")
		{
			if(announcement=="")
			{
				document.getElementById("announcement").style.border="1px solid red";
			}
			if(date=="")
			{
				document.getElementById("multi_date").style.border="1px solid red";
			}
			if(action=="")
			{
				document.getElementById("action").style.border="1px solid red";
			}
		}
		else
		{
			localStorage.setItem("action",action);
			localStorage.setItem("date",date);
			localStorage.setItem("announcement",announcement);
			location.assign("submit_announcement.php?action="+action);
		}
	}
  </script>
</body>
</html>