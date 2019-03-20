<!doctype html>
<html>
<head>
<title>Login</title>
    <style> 
        body {
    margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 80px;
	color:White;
    font-family: verdana;
    font-size: 100%
    
 
            h1 {
    color: indigo;
    font-family: Sans-serif;
    font-size: 200%;
}
        h3 {
    color: indigo;
    font-family: verdana;
    font-size: 100%;
}
		}   
        
    </style>
</head>
<body background="c.jpg">
    
     <center><h1>TIME AND PRODUCTIVITY ANALYSIS</h1></center>

<center><p><a href="Register.php">Register</a> | <a href="login.php">login</a></p></center>
<center>
<form action="" method="POST">
Username:<br> 
<input type="text" name="username" required/><br>
Password:<br>
<input type="password" name="password" required/><br>	
<br><p>
<input type="submit" value="Login" name="submit" /></p>

</form>
</center>
<?php

$dbhost = 'localhost:3306';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'analysis';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         //echo 'Connected successfully<br>';
		      
		 if(isset($_POST['submit'])){
// Define $username and $password 
$Firstname=$_POST['username']; 
$Password=$_POST['password']; 
         $sql = "SELECT Firstname,Password FROM register WHERE Firstname='".$Firstname."' AND Password='".$Password."' ";
         $result = mysqli_query($conn, $sql);
//print_r($result);exit;
         if (mysqli_num_rows($result) > 0) {
           header('Location: Dash.php');
         } else {
            echo "Invalid username and Password";
         }
		 }
		 
		 
         mysqli_close($conn);

		
?>

</body>
</html>     