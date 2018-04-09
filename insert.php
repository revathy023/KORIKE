<?php

													if(isset($_POST['sub'])){
													$a=$_POST['cat'];
													$b=$_POST['subcat'];
													$c=$_POST['loc'];
													$d=$_POST['desc'];


														
														$sql2="INSERT INTO complaintregistration(l_id, category, subcategory, location, description) VALUES (1,'".$a."','".$b."','".$c."','".$d."')";
													$result2=mysqli_query();
													if(mysqli_query($db,$sql2)){
		echo"succesfull";
		exit();
	}else{echo"u hv entered incorrect USERNAME OR password";exit();
	}
	
													}						
?>