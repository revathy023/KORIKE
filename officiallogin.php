
<?php 
session_start();
include_once('master.php');



 ?>
<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page - Korike</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		
	</head>

	<body class="login-layout blur-login">
	
		<div class="main-container">
			<div class="main-content body">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa 			fa-users green"></i>
													<span class="white">Korike</span>
									
								</h1>
											<h4 class="red" id="id-company-text">Complaint Management System</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-pencil-square-o "></i>
												Please Enter Your Information
											</h4>

											<div class="space-6"></div>

											<form action="officiallogin.php" method="post">
												<fieldset>
												
													
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="username"placeholder="Username" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" name="password" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														

														<button type="submit" name="login" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											

											
										</div><!-- /.widget-main -->

										
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								

								
							</div><!-- /.position-relative -->

						
							
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
	</body>
</html>
<?php
$user='root';
$pass='';
$db='korike';
$db=new mysqli('localhost',$user,$pass,$db) or die("error");


if(isset($_POST['login'])){
	
	$uname=$_POST['username'];
	$pass=$_POST['password'];
	
	
	$sql="select emp_id,uname,password,deptid from officiallogin  where uname='".$uname."' AND password='".$pass."'  limit 1";
	
	$result=mysqli_query($db,$sql);
	
	if(mysqli_num_rows($result)==1){
		
	
			while($fetchFromTable=mysqli_fetch_array($result))
		{
			if(( $fetchFromTable['deptid']==1)||( $fetchFromTable['deptid']==2)){
			
			$_SESSION['uname']=$fetchFromTable['uname'];
			$_SESSION['eid']=$fetchFromTable['emp_id'];
			$_SESSION['password']=$fetchFromTable['password'];
			$_SESSION['deptid1']=$fetchFromTable['deptid'];
			echo '<script type="text/javascript"> window.open("employeehome.php","_self");</script>';
		exit();
		}
else{echo	"<script>
alert('You are not an employee');
window.open('officiallogin.php','_self');

</script>";
						
exit();}

	}
	}
	else{
echo	"<script>
alert('incorrect password or username');
window.open('officiallogin.php','_self');
</script>";
exit();
}
}


if(isset($_POST['reg'])){
	
				
				$uname=$_POST['username1'];
				$pass=$_POST['password1'];
				$fname=$_POST['firstname'];
				$lname=$_POST['lastname'];
				$reppass=$_POST['repeat'];
				$add=$_POST['address'];
				$phone=$_POST['phoneno'];
				$email=$_POST['email'];
				$dep=$_POST['department'];
				if((($uname)&&($pass)&&($fname)&&($lname)&&($reppass)&&($add)&&($phone)&&($email)&&($dep))!=""){
				

				
				$sql="select email from officiallogin where email=$email" or throw_ex(mysqli_error($db));
			
				if(mysqli_num_rows(mysqli_query($db,$sql))==0)
				
{
				if($pass==$reppass){
					$sql4="Select deptid from department where deptname='".$dep."'";
					$result4=mysqli_query($db,$sql4)or die("result 4");
					
					while($fetchFromTable=mysqli_fetch_array($result4)){
						$deptid=$fetchFromTable['deptid'];
						
					}
					
					
		
		

 $sql6="INSERT INTO officiallogin( fname, lname, uname,password, address,emailid, phoneno,deptid) VALUES ('".$fname."','".$lname."','".$uname."','".$pass."','".$add."','".$email."','".$phone."',".$deptid.")";
		


				$result6=mysqli_query($db,$sql6) or die("error");
				
					
}
else{echo	"<script>
alert('Password And Repeat Password does not match');
window.open('officiallogin.php','_self');

</script>";
						
exit();}
}
					
					else{
						
					echo	"<script>
alert('incorrect password or username');
window.open('officiallogin.php','_self');

</script>";
						
					exit();}
				
				}else{
				echo
				"<script>
alert('Fields left empty');
window.open('officiallogin.php','_self');

</script>";}

}




   

   
   




?>
