<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<style>
body {
    
    margin-top: 50px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 250px;
	color:white;
    font-family: verdana;
    font-size: 200%
		}

form{
 font-size: 40px;
 }
 </style>

<body background="d.jpg">

<form action="" method="POST">

Task:<br>
<select name="Task">
<option value="">--SELECT--</option>
  <option value=1>Documentation</option>
  <option value=2>Testing</option>
  <option value=3>Coding</option>
  <option value=4>Internet</option>
</select></br>
Project Title:<br>
<textarea name="ProjectTitle" rows="1" cols="25"></textarea>
</br>
Description:<br>
<textarea name="Description" rows="1" cols="50"></textarea>
</br>
Start Time:<br>
<input type="datetime-local" id="StartTime"
       name="StartTime" value="0000-00-00T19:30"
       min="2019-01-01T00:00" max="2019-12-31T00:00">
	   </br>
End Time:<br>
<input type="datetime-local" id="EndTime"
       name="EndTime" value="0000-00-00T19:30"
       min="2019-01-01T00:00" max="2019-12-31T00:00"></br>
Status:<br>
<select name="Status">
<option value="">--SELECT--</option>
  <option value=1>Started</option>
  <option value=2>Pending</option>
  <option value=3>Completed</option>
</select>
	 <br>  <input type="submit" value="Go" name="Go" /></p>


</form>
<?php
include 'config.php';
if(isset($_POST["Go"])){

//print_r(2423);exit;
	$Task=$_POST['Task'];
	$Description=$_POST['Description'];
    $StartTime=$_POST['StartTime'];
	$EndTime=$_POST['EndTime'];
	$ProjectTitle=$_POST['ProjectTitle'];
	$Status=$_POST['Status'];
	$sql="INSERT INTO works(Task,Description,StartTime,EndTime,ProjectTitle,Status) VALUES('".$Task."','".$Description."','".$StartTime."','".$EndTime."','".$ProjectTitle."','".$Status."')";
$result = mysqli_query($conn, $sql);
//print_r($sql);exit;
}
?>
</body>
</html>
 
