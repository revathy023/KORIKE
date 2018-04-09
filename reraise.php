<!DOCTYPE html>
<?php
session_start();
include_once('master.php');
$user='root';
$pass='';
$db='korike';
$db=new mysqli('localhost',$user,$pass,$db) or die("error");

?>
<html lang="en">
	<head>
	<style>
	gar{ background-image: url(C:\xampp\htdocs\assets\images\gar.jpg);}
	pot{ background-image: url(/images/buttons/add.png);}
	water{ background-image: url(/images/buttons/add.png);}
	trans{ background-image: url(/images/buttons/add.png);}

	</style>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Complaint Registration</title>

		<meta name="description" content="and Validation" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/select2.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="skin-1">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>
				

			<div class="navbar-header pull-left">
					<a href="korike.php" class="navbar-brand">
						<big>
							<i class="fa fa-users green"></i>
						<span class="white">	Korike</span>
						</big>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						

						

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/avatar2.png" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
											<?php echo $_SESSION['hello1'];?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
						

								<li>
									<a href="userdetails.php">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="regi.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
										<?phpsession_destroy();   
										session_unset();?>
										
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>
<!--  user home page-->
				<ul class="nav nav-list">
				<li class="">
					
							
						<a href="gallery.php">
							<i class="glyphicon-home "></i>
							<span class="menu-text"> Gallery</span>
						</a>
						<a href="userhome.php">
							<i class="glyphicon-home "></i>
							<span class="menu-text"> HOME</span>
						</a>
						<b class="arrow"></b>
					</li>

				</ul>

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					

					<div class="page-content">
						
							<div class="page-header">
							<h1>
								Complaints
								
							</h1>
						</div><!-- /.page-header -->
						
							<div class="row">
							<div class="col-xs-12">
								<div class="widget-box">
									<div class="widget-body">
									<div class="widget-main">
									<div id="fuelux-wizard-container">
									<div class="row">
									<div class="col-xs-12">
														<form method="post" >
										<?php
										$cc=$_GET['c'];
									
														
														
										?>
										<div class="row">
											<div class="form-group"><div class="col-xs-12 col-sm-9">
																		<label class="col-sm-12 control-label no-padding-right" for="form-field-username">Comments</label>

																		<div class="col-sm-9">
																			<input class="col-xs-7 col-sm-3" type="text" id="form-field-username"name="lol"  />
																			
																			
																		</div>
																		
																	</div></div></div>
										
										<div class="col-xs-12 col-sm-9">
															<label for="form-field-select-1">STATUS</label>
															
															<select name="sel"  class="form-control"   id="form-field-select-1">
																<option value="" selected>--Choose Category--</option>
																<option value="not convinced" >Not convinced</option>
																<option value="issue not solved" >Issue Not Solved</option>
																
																			
																		
															</select>

														</div>
														<div class="space-10"></div>
														<div class="row"><div class="row center">
																<button type="submit" name="reg" class="btn btn-app btn-primary ">
																<i class="ace-icon fa fa-pencil-square-o bigger-150"></i>
																UPDATE
																		

															
														</button>
														</div></div>
										<?php
														if(isset($_POST['reg'])){
																	 $status=$_POST['sel'];
																	$com=$_POST['lol'];
																		date_default_timezone_set("Asia/KolKata");
																		$e=date("Y:m:d");
																	$sql6="UPDATE completed set status = '".$status."', description='".$com."',time='".$e."' WHERE comp_id='".$cc."'"; 
																	$result6=mysqli_query($db,$sql6);
																	
																	$sql17="INSERT INTO complaintregistration(comp_id,l_id,category,subcategory,location,description,status,time) SELECT comp_id,l_id,category,subcategory,  					
																	location,description,status,time FROM completed WHERE comp_id='".$cc."'";
	$result17=mysqli_query($db,$sql17);
$sql16="DELETE  FROM  completed WHERE comp_id='".$cc."'";
	$result16=mysqli_query($db,$sql16)or die("error");
																	
							
										
										}
										
										



										?>
										
										
										</form>
										
										
										
										
										
												</div>
												</div>

						</div></div>	</div></div>
						</div></div>
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Korike</span>&nbsp; &nbsp;
							Complaint Management System &copy; 2017-2018
						</span>

						&nbsp; &nbsp;
						
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->
		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/wizard.min.js"></script>
		<script src="assets/js/jquery.validate.min.js"></script>
		<script src="assets/js/jquery-additional-methods.min.js"></script>
		<script src="assets/js/bootbox.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>
		<script src="assets/js/select2.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		
	<!-- inline scripts related to this page -->
		<script type="text/javascript">
		
		
					
			
			
			
			
			
			
		</script>
		
		
		
		
		
		

	</body>
</html>