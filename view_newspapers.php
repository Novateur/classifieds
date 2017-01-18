<?php

	ob_start();
	require_once("includes/functions.php");
	
	if(!isset($_SESSION['admin_username']))
	{
		header("location:admin_login.php");
	}
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
  </style>
</head>
<?php echo "<body onload=\"get_newspapers()\">"; ?>
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
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <aside class="bg-black aside-md hidden-print" id="nav">          
          <section class="vbox">
            <section class="w-f scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">               
                <!-- nav -->                 
                <nav class="nav-primary hidden-xs">
                  <ul class="nav nav-main" data-ride="collapse">
                    <li >
                      <a href="index.php" class="auto">
                        <span class="font-bold">HOME</span>
                      </a>
                    </li>
					<li >
                      <a href="add_ad_size.php" class="auto">
                        <span class="pull-right text-muted">
                          <i class="i i-circle-sm-o text"></i>
                          <i class="i i-circle-sm text-active"></i>
                        </span>
                        <span class="font-bold">ADVERT SIZE</span>
                      </a>
                      <ul class="nav dk">
                        <li >
                          <a href="add_ad_size.php" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Add advert size</span>
                          </a>
                        </li>
                        <li >
                          <a href="#" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>View advert size</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="active">
                      <a href="view_newspapers" class="auto">
                        <span class="pull-right text-muted">
                          <i class="i i-circle-sm-o text"></i>
                          <i class="i i-circle-sm text-active"></i>
                        </span>
                        <span class="font-bold">NEWSPAPER</span>
                      </a>
                      <ul class="nav dk">
                        <li >
                          <a href="admin_index.php" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Add Newspaper</span>
                          </a>
						</li>
						<li class="active">
						  <a href="view_newspapers.php" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>View Newspaper</span>
                          </a>
                        </li>
					  </ul>
                    </li>
					<li >
                      <a href="add_section.php" class="auto">
                        <span class="pull-right text-muted">
                          <i class="i i-circle-sm-o text"></i>
                          <i class="i i-circle-sm text-active"></i>
                        </span>
                        <span class="font-bold">SECTION</span>
                      </a>
                    </li>                    
					<li >
                      <a href="add_category.php" class="auto">
                        <span class="pull-right text-muted">
                          <i class="i i-circle-sm-o text"></i>
                          <i class="i i-circle-sm text-active"></i>
                        </span>
                        <span class="font-bold">CATEGORY</span>
                      </a>
                    </li>
                  </ul>
                  <div class="line dk hidden-nav-xs"></div>
                </nav>
                <!-- / nav -->
              </div>
            </section>
            
            <footer class="footer hidden-xs no-padder text-center-nav-xs">
              <a href="logout.php" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
                <i class="i i-logout"></i>
              </a>
              <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
                <i class="i i-circleleft text"></i>
                <i class="i i-circleright text-active"></i>
              </a>
            </footer>
          </section>
        </aside>
        <!-- /.aside -->
        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder"><br/>              
					<div class="col-sm-12">
                      <div class="alert alert-success"><h2 class="m-b-xs text-black">All newspapers</h2></div>
                    </div>				
					<div class="col-sm-3">
					</div>
					<div class="col-sm-6" id="delete_msg" style="display:none">
					</div>
					<div class="col-sm-3">
                    </div>				
					<div class="col-sm-12" id="paste_all_newspaper">

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
  			<div id="delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog" style="width:400px">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<p class="modal-title" id="myModalLabel"style="font-size:13px"><h4><i class="i i-trashcan"></i> Delete</h4></p>
						</div>
						<div class="modal-body" style='font-size:14px'>
							Are you sure you want to delete this newspapaer ?
						</div>
						<div class="modal-footer">
							<button class="btn btn-default btn-rounded" data-dismiss="modal" aria-hidden="true">Cancel</button>
							<span id="proceed_btn"></span>
						</div>
					</div>
				</div>
			</div>  			
			<div id="view_logo" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog" style="margin-top:100px">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<p class="modal-title" id="myModalLabel"style="font-size:13px"><h4><i class="i i-picture"></i> Logo</h4></p>
						</div>
						<div class="modal-body" style='font-size:14px' id="paste_image" align="center">
							
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
	$('#add_newspaper_form').submit(function(e){
		e.preventDefault();
		var name,desc,file1;
		name = $('#name').val();
		desc = $('#desc').val();
		file1 = $('#file1').val();
		
		if(name=="" || desc=="" || file1=="")
		{
			if(name=="")
			{
				document.getElementById("name").style.border="1px solid red";
			}			
			if(desc=="")
			{
				document.getElementById("desc").style.border="1px solid red";
			}			
			if(file1=="")
			{
				document.getElementById("file1").style.border="1px solid red";
			}
		}
		else
		{
				$.ajax({
					url:"handler/add_newspaper.php",
					type:"POST",
					data: new FormData(this),
					cache:false,
					contentType:false,
					processData:false,
					success:function(data)
					{
						//alert(data);
						if(data=="added")
						{
							$('#success').modal('show');
						}
						else
						{
							$('#response_msg').html("<div class='alert alert-danger'>"+data+"</div>");
						}
					}
				})
		}
	})
	function get_newspapers()
	{
		$.get("handler/get_all_newspapers.php?page=1",function(response){
			$('#paste_all_newspaper').html(response);
		})
	}	
	function get_newspapers_by_page(page)
	{
		$.get("handler/get_all_newspapers.php?page="+page,function(response){
			$('#paste_all_newspaper').html(response);
		})
	}
	function delete_newspaper(id,page)
	{
		$('#proceed_btn').html("<button type='button' class='btn btn-danger btn-rounded' value="+id+" onclick=\"cont_delete(this.value,"+page+")\">Ok</button>");
		$('#delete').modal('show');
	}
	function cont_delete(val,page)
	{
		$.post("handler/delete_newspaper.php",{id:val},function(response){
			if(response=="deleted")
			{
				$('#delete').modal('hide');
				get_newspapers_by_page(page);
				$('#delete_msg').html("<div class='alert alert-info'>Newspaper delete successfully</div>").slideDown().delay(2000).slideUp();
			}
			else
			{
				$('#delete_msg').html("<div class='alert alert-danger'>"+response+"</div>").slideDown().delay(2000).slideUp();
			}
		})
	}
	function paginate(page_to)
	{
		get_newspapers_by_page(page_to);
	}
	function view_logo(image)
	{
		$('#paste_image').html("<img src='logos/"+image+"' width='400' height='300'/>");
		$('#view_logo').modal('show');
	}
  </script>
</body>
</html>