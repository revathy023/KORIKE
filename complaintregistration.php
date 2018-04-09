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

			<div class="navbar-header pull-left ">
									<a href="korike.php" class="navbar-brand ">
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
										session_unset(); ?>
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
						<a href="userhome.php">
							<i class="glyphicon-home "></i>
							<span class="menu-text"> Home </span>
						</a>

						<b class="arrow"></b>
					</li>
						<li class="">
						<a href="gallery.php">
							<i class="glyphicon-home "></i>
							<span class="menu-text">Gallery </span>
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
								Complaint Registration
								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
									<div class="widget-box">
									
				
									<div class="widget-body">
										<div class="widget-main">
										
											<div id="fuelux-wizard-container">
											<form method="post" action="" id="complaint">
												<div>
													<ul class="steps">
														<li data-step="1" class="active">
															<span class="step">1</span>
															<span class="title">Complaint Category and Subcategory</span>
														</li>

														<li data-step="2">
															<span class="step">2</span>
															<span class="title">Complaint Location</span>
														</li>

														<li data-step="3">
															<span class="step">3</span>
															<span class="title">Complaint Description</span>
														</li>

														
													</ul>
												</div>

												<hr />

												<div class="step-content pos-rel">
													<div class="step-pane active" data-step="1">
														<h3 class="lighter block green">Choose the Complaint Category</h3>

														
															
														<div class="col-xs-12 col-sm-9">
															<label for="form-field-select-1">Category</label>
															
															<select name="sel"  class="form-control"   id="form-field-select-1">
																<option value="" selected>--Choose Category--</option>
																<?php 
																		$sql1="SELECT category,cat_id FROM category ";
																			$result1=mysqli_query($db,$sql1);
																			if(mysqli_num_rows($result1)>0){
																				while($x=mysqli_fetch_array($result1))
																					{
																				?>
																						<option value=<?php echo $x['cat_id'];?>><?php  echo $x['category'];  ?> </option>
																			<?php  }}
																			
																			$x=$_POST['sel'];
																			if($x=="")
																			$cat=0;
																			else{$cat=$x;};
																			
																			?>
															</select>

														</div>
														
														
														
														
														
														
														<div class="col-xs-12 col-sm-9">
														
														<h3 class="lighter block green">Choose the Complaint SubCategory</h3>

														
															<label for="form-field-select-2">SubCategory</label>
															<select name="sel2"  class="form-control"   id="form-field-select-2">
																<option value="" selected>--Sub Category--</option>
																<?php 
																	if($_POST['sel']!=""){
																			$val=$_POST['sel'];
																			
																			$sql3="SELECT  * FROM subcategory where cat_id=$val";
																			$result3=mysqli_query($db,$sql3);
																		if(mysqli_num_rows($result3)>0){
																			while($p=mysqli_fetch_array($result3))
																				{
																					?>
																					<option  value=<?php echo $p['subcat_id'];?>> <?php  echo $p['subcategory']; ?> </option>
																<?php  }}}?>
 
															</select>
														

														</div>
													</div>

													<div class="step-pane" data-step="2">
														<div>
															
															<div class="col-xs-12 col-sm-9">
														
														<h3 class="lighter block green">Enter The Location </h3>
															<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text"name="location" class="form-control" placeholder="Location" />
															
														</span>
													</label>
</div>
															

															

														</div>
													</div>

													<div class="step-pane" data-step="3">
														
															<div class="col-xs-12 col-sm-9">
														
														<h3 class="lighter block green">Enter the Description of your Complaint </h3>
															<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<textarea class="input-xlarge" name="description" id="description"></textarea>
															
														</span>
													</label>
</div>
															
													</div>

													
												</div>
												</form>
											</div>
											

											<hr />
											<div class="wizard-actions">
												<button class="btn btn-prev">
													<i class="ace-icon fa fa-arrow-left"></i>
													Prev
												</button>

												<button class="btn btn-success btn-next"  name="done" data-last="Finish">
													Next
													<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
												</button>
											</div>
										</div><!-- /.widget-main -->
									</div><!-- /.widget-body -->
									
								</div>

								

								
							

							

												

												
										
								</div><!-- PAGE CONTENT ENDS -->
							
						</div><!-- /.row -->
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
		
		$('#form-field-select-1').change(function(){
						 $('#form-field-select-2').prop('selectedIndex',0);
						 $('#complaint').submit();
						  
						
					})
		
		
			jQuery(function($) {
				
				$('#form-field-select-1').prop('selectedIndex',<?php echo $cat;?>);
				
			
				$('[data-rel=tooltip]').tooltip();
			
				$('.select2').css('width','200px').select2({allowClear:true})
				.on('change', function(){
					$(this).closest('form').validate().element($(this));
				}); 
			
			
				var $validation = false;
				$('#fuelux-wizard-container')
				.ace_wizard({
					//step: 2 //optional argument. wizard will jump to step "2" at first
					//buttons: '.wizard-actions:eq(0)'
				})
				.on('actionclicked.fu.wizard' , function(e, info){
					if(info.step == 1 && $validation) {
						if(!$('#validation-form').valid()) e.preventDefault();
					}
				})
				//.on('changed.fu.wizard', function() {
				//})
				 .on('finished.fu.wizard', function(e) {
					
					var formData = new FormData($('form')[0]);
					$.ajax({
												url			:	"ajax/x.php",
												type		:	"POST",
												data		:	formData,
												contentType	: 	false,
												cache		:	false,
												processData	:	false,
												success		: 	function (data, status, jqXHR) 
																	{
																		 bootbox.dialog({
																			message:data, 
																			buttons: {
																				"success" : {
																					"label" : "OK",
																					"className" : "btn-sm btn-primary",
																					
																					
																				}
																			}
																		});
																	},
																	
												error		: 	function (jqXHR, status, err) 
																	{
																		 alert(err);
																		
																	},
										});  //####### End of ajax #####   
				
				 
					
				}) .on('stepclick.fu.wizard', function(e){
					//e.preventDefault();//this will prevent clicking and selecting steps
				});
			
			
				//jump to a step
				/**
				var wizard = $('#fuelux-wizard-container').data('fu.wizard')
				wizard.currentStep = 3;
				wizard.setState();
				*/
			
				//determine selected step
				//wizard.selectedItem().step
			
			
			
				//hide or show the other form which requires validation
				//this is for demo only, you usullay want just one form in your application
				$('#skip-validation').removeAttr('checked').on('click', function(){
					$validation = this.checked;
					if(this.checked) {
						$('#sample-form').hide();
						$('#validation-form').removeClass('hide');
					}
					else {
						$('#validation-form').addClass('hide');
						$('#sample-form').show();
					}
				})
			
			
			
				//documentation : http://docs.jquery.com/Plugins/Validation/validate
			
			
				$.mask.definitions['~']='[+-]';
				$('#phone').mask('(999) 999-9999');
			
				jQuery.validator.addMethod("phone", function (value, element) {
					return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
				}, "Enter a valid phone number.");
			
				$('#validation-form').validate({
					errorElement: 'div',
					errorClass: 'help-block',
					focusInvalid: false,
					ignore: "",
					rules: {
						email: {
							required: true,
							email:true
						},
						password: {
							required: true,
							minlength: 5
						},
						password2: {
							required: true,
							minlength: 5,
							equalTo: "#password"
						},
						name: {
							required: true
						},
						phone: {
							required: true,
							phone: 'required'
						},
						url: {
							required: true,
							url: true
						},
						comment: {
							required: true
						},
						state: {
							required: true
						},
						platform: {
							required: true
						},
						subscription: {
							required: true
						},
						gender: {
							required: true,
						},
						agree: {
							required: true,
						}
					},
			
					messages: {
						email: {
							required: "Please provide a valid email.",
							email: "Please provide a valid email."
						},
						password: {
							required: "Please specify a password.",
							minlength: "Please specify a secure password."
						},
						state: "Please choose state",
						subscription: "Please choose at least one option",
						gender: "Please choose gender",
						agree: "Please accept our policy"
					},
			
			
					highlight: function (e) {
						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
					},
			
					success: function (e) {
						$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
						$(e).remove();
					},
			
					errorPlacement: function (error, element) {
						if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
							var controls = element.closest('div[class*="col-"]');
							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
							else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
						}
						else if(element.is('.select2')) {
							error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
						}
						else if(element.is('.chosen-select')) {
							error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
						}
						else error.insertAfter(element.parent());
					},
			
					submitHandler: function (form) {
					},
					invalidHandler: function (form) {
					}
				});
			
				
				
				
				$('#modal-wizard-container').ace_wizard();
				$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
				
				
				/**
				$('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
					$(this).closest('form').validate().element($(this));
				});
				
				$('#mychosen').chosen().on('change', function(ev) {
					$(this).closest('form').validate().element($(this));
				});
				*/
				
				
				$(document).one('ajaxloadstart.page', function(e) {
					//in ajax mode, remove remaining elements before leaving page
					$('[class*=select2]').remove();
				});
				
				
				
				
				
						
						
						
						
					});
					
					
					
			
			
			
			
			
			
		</script>
		
		
		
		
		
		

	</body>
</html>