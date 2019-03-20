<?php
 
include 'config.php';
$sql_query = "SELECT * FROM works where Task=1 and Status=1";
$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
$dataPoints = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
$dataPoints = array(
	array("x" => $rows["Task"] , "y" =>$rows["Status"]  ));
}
//print_r($dataPoints);
// print_r($dataPoints);exit;
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "DOCUMENTATION"
	},
	
	axisY: {
		title: "Status",
		 //interval:"0:100:20",
		includeZero: false
	},
	axisX: {
		title: "Task",
		interval: 1,
		includeZero: true
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 50%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                              