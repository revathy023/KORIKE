<?php


  session_start();
include_once('master.php');
$user='root';
$pass='';
$db='korike';
$db=new mysqli('localhost',$user,$pass,$db) or die("error");

   
?>

<!DOCTYPE html>
<html lang="en-US">
<body>

<h1>My Web Page</h1>

<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
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
  var options = {'title':'My Average Day', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

</body>
</html>
