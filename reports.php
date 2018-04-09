<!DOCTYPE html>
<?php
session_start();

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
				<div class="navbar-header">
					<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						

						


						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/avatar2.png" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo $_SESSION['uname1'];?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
						

							

							
								<li>
									<a href="adminlogin.php">
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
						<a href="adminhome.php">
							<i class="glyphicon-home "></i>
							<span class="menu-text"> Home</span>
						</a>
							
						
						<a href="reports.php">
							<i class="glyphicon-home "></i>
							<span class="menu-text">Reports</span>
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
								Data Reports
								
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
											<form method="post" action="reports.php">
										<div class="col-sm-7 infobox-container">
										<div class="infobox infobox-green">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-comments"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><?php $sql23="SELECT comp_id,category,subcategory,  					
location,description,status
FROM complaintregistration 
UNION    					
SELECT   comp_id,category,subcategory,  												
location,description,status     
FROM  completed	";	
		$result23 =mysqli_query($db,$sql23);echo $rowcount=mysqli_num_rows($result23);	
 ?></span>
												<div class="infobox-content">Registered Complaints</div>
											</div>
											

											<!--<div class="stat stat-success">8%</div>-->
										</div>

										<div class="infobox infobox-blue">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-comments"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><?php $sql15="SELECT * from completed";$result15=mysqli_query($db,$sql15);echo $rowcount1=mysqli_num_rows($result15);?></span>
												<div class="infobox-content">Solved Complaints</div>
											</div>

											
										</div>

										<div class="infobox infobox-pink">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-comments"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><?php $sql88="SELECT *
FROM complaintregistration 	";$result88=mysqli_query($db,$sql88);echo $rowcount2=mysqli_num_rows($result88);?></span>
												<div class="infobox-content">Pending Complaints</div>
											</div>
											
										</div>

										<div class="infobox infobox-red">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-comments"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><?php $sql99="SELECT *
FROM userregistration 	";$result99=mysqli_query($db,$sql99);echo $rowcount3=mysqli_num_rows($result99);?></span>
												<div class="infobox-content">Registered users</div>
											</div>
										</div>


										


										

										

									</div>
									<div class="vspace-12-sm"></div>

									<div class="col-sm-5">
										<div class="widget-box">
											<div class="widget-header widget-header-flat widget-header-small">
												
																	<div id="piechart"></div>
											

										</div><!-- /.widget-box -->
									</div><!-- /.col -->
									</div><!-- /.col -->
									
									
									<div class="vspace-12-sm"></div>

									<div class="col-sm-5">
									<div class="widget-box">
											<div class="widget-header widget-header-flat widget-header-small">
												
											
											<div id="piechart2"></div>

										</div><!-- /.widget-box -->
										
									</div><!-- /.col -->
									</div><!-- /.col -->
								
								
									<div class="vspace-12-sm"></div>

									<div class="col-sm-5">
									<div class="widget-box">
											<div class="widget-header widget-header-flat widget-header-small">
												
											
											<div id="piechart3"></div>

										</div><!-- /.widget-box -->
										
									</div><!-- /.col -->
									</div><!-- /.col -->
									
									<div class="space-10"></div>
								 	<!--<div class="row center">
										<button type="submit" name="del" class=" btn btn-sm btn-success">
															<span class="bigger-110">LOOK UP</span>

															<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
														</button>
									</div>	 -->			
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
		
		
		
		
		
		
		
		
		

	</body>
</html>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart1);
google.charts.setOnLoadCallback(drawChart2);
google.charts.setOnLoadCallback(drawChart3);

// Draw the chart and set the chart values
function drawChart1() {
  var data = google.visualization.arrayToDataTable([	 ['category', 'complaints'],
  ['Garbage', <?php $sql22="SELECT comp_id,category,subcategory,  					
location,description,status
FROM complaintregistration where category='1'
UNION    					
SELECT   comp_id,category,subcategory,  												
location,description,status     
FROM  completed where category='1'	";	$result22 =mysqli_query($db,$sql22); echo $rowcount=mysqli_num_rows($result22);	?>],
['WaterSupply', <?php $sql23="SELECT comp_id,category,subcategory,  					
location,description,status
FROM complaintregistration where category='2'
UNION    					
SELECT   comp_id,category,subcategory,  												
location,description,status     
FROM  completed where category='2'	";	$result23 =mysqli_query($db,$sql23);echo $rowcount=mysqli_num_rows($result23);?>]

			
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Categories', 'width':500, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}



function drawChart2() {
  var data = google.visualization.arrayToDataTable([	 ['category', 'complaints'],
  ['No Dustbin', <?php $sql31="SELECT comp_id,category,subcategory,  					
location,description,status
FROM complaintregistration where subcategory='1'
UNION    					
SELECT   comp_id,category,subcategory,  												
location,description,status     
FROM  completed where subcategory='1'	";	$result31 =mysqli_query($db,$sql31); echo $rowcount=mysqli_num_rows($result31);	?>],

['No Proper Disposal', <?php $sql32="SELECT comp_id,category,subcategory,  					
location,description,status
FROM complaintregistration where subcategory='2'
UNION    					
SELECT   comp_id,category,subcategory,  												
location,description,status     
FROM  completed where subcategory='2'	";	$result32 =mysqli_query($db,$sql32);echo $rowcount=mysqli_num_rows($result32);?>],

['Leaking Waterpipes', <?php $sql33="SELECT comp_id,category,subcategory,  					
location,description,status
FROM complaintregistration where subcategory='3'
UNION    					
SELECT   comp_id,category,subcategory,  												
location,description,status     
FROM  completed where subcategory='3'	";	$result33 =mysqli_query($db,$sql33);echo $rowcount=mysqli_num_rows($result33);?>],

['No WaterSupply', <?php $sql34="SELECT comp_id,category,subcategory,  					
location,description,status
FROM complaintregistration where subcategory='4'
UNION    					
SELECT   comp_id,category,subcategory,  												
location,description,status     
FROM  completed where subcategory='4'	";	$result34 =mysqli_query($db,$sql34);echo $rowcount=mysqli_num_rows($result34);?>],

			
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Subcategories', 'width':500, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
  chart.draw(data, options);
}



function drawChart3() {
  var data = google.visualization.arrayToDataTable([	 ['category', 'complaints'],
  ['Total', <?php $sql35="SELECT comp_id,category,subcategory,  					
location,description,status
FROM complaintregistration 
UNION    					
SELECT   comp_id,category,subcategory,  												
location,description,status     
FROM  completed 	";	$result35 =mysqli_query($db,$sql35); echo $rowcount=mysqli_num_rows($result35);	?>],
['Solved', <?php $sql36="SELECT comp_id,category,subcategory,  					
location,description,status
FROM completed	";	$result36 =mysqli_query($db,$sql36);echo $rowcount=mysqli_num_rows($result36);?>]

			
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'SolvedComplaints/TotalComplaints', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
  chart.draw(data, options);
}


</script>

<?php 

if(isset($_POST['del'])){
		
	
$sql7="INSERT INTO completed(comp_id,l_id,category,subcategory,location,description,status,time) SELECT comp_id,l_id,category,subcategory,  					
location,description,status,time FROM complaintregistration WHERE status ='completed'";
	$result7=mysqli_query($db,$sql7);
$sql16="DELETE  FROM  complaintregistration WHERE status = 'completed'";
	$result16=mysqli_query($db,$sql16)or die("error");
	
	
	
}




?>