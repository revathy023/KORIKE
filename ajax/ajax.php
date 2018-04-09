<?php
$user='root';
$pass='';
$db='korike';
$db=new mysqli('localhost',$user,$pass,$db) or die("error");


$catId=$_POST['catId'];


/*$query="select * from subcategory where cat_id=$catId";
$runquery=mysqli_query($db,$query);
while($rows=mysqli_fetch_array($runquery)){
	$result[]=$rows;
	
	
}*/
//header("Content-type:text/x-json");
echo ($catId);

?>