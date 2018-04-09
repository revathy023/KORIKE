<html>
<body>
<form method="POST">


															
			</form>												
		</body>
</html>		
	
		<?php
$user='root';
$pass='';
$db='korike';
$db=new mysqli('localhost',$user,$pass,$db) or die("error");
//echo "good job done
	?>	

<strong> Select Designation : </strong> 
<select name="empName"> 
       <option value=""> -----------ALL----------- </option> 
     <?php
         $sql=mysqli_query($db,"Select category  from category");
         while($r=mysqli_fetch_row($sql))
         { 
               echo "<option value='$r[0]'> $r[0] </option>";
         }
     ?>
</select>

