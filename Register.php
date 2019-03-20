<!DOCTYPE html>
<html>
<head>
<body background="b.jpg">
<title>Register</title>
    <style> 
        body {
            
    margin-top: 1px;
    margin-bottom: 100px;
    margin-right: 50px;
    margin-left: 50px;
    background-color: Orange ;
    color: black;
    font-family: verdana;
    font-size: 150%
    
        }
		
         h1 {
    color: indigo;
    font-family: verdana;
    font-size: 150%;
}
         h2 {
    color: indigo;
    font-family: verdana;
    font-size: 100%;
}
            
        
    </style>
</head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Basic Header</title>
	<link rel="stylesheet" href="assets/header-basic.css">
	<link href="assets/style.css" rel="stylesheet">
<header class="header-basic">
	<div id="container">
    <div class="image-container" style="padding-top:60px;">
	</div>
    </div>
	<center><h1>REGISTERATION FORM</h1></center>
<form action="" method="POST" onSubmit = "return checkPassword(this)">
    <legend>  
 <center>        
FirstName :<br>  
<input type="text" name="Firstname" maxlength="12" pattern='[A-Za-z\\s]*' required/> <br>
MiddleName :<br>  
<input type="text" name="Middlename" /> <br>	
LastName :<br>  
<input type="text" name="Lastname" maxlength="2" required/> <br>
Email :<br> 
<input type="email" name="Email" required/> <br>
Password :<br>
<input type="password" name="Password" required maxlength="8"/> <br>
Confirm password :<br>
<input type="password" name="Confirmpassword" required maxlength="8"/> <br>
PhoneNumber :<br>  
<input type="text" id="phone" name="phone" required pattern="[1-9]{1}[0-9]{9}" maxlength="10">
	   <br>
<a href="login.php"><input type="submit" value="Register" name="submit" />

  </center>

     </legend>

</form>
<script>
 function checkPassword(form) { 
                password1 = form.Password.value; 
                password2 = form.Confirmpassword.value; 
       
                if (password1 != password2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
  
            } 
        </script>    
<?php
include 'config.php';
if(isset($_POST["submit"])){


	$firstname=$_POST['Firstname'];
	$middlename=$_POST['Middlename'];
    $lastname=$_POST['Lastname'];
	$email=$_POST['Email'];
	$password=$_POST['Password'];
	$confirmpassword=$_POST['Confirmpassword'];
	$phonenumber=$_POST['phonenumber'];
	

	$sql="INSERT INTO register(Firstname,Middlename,Lastname,Email,Password,Confirmpassword,phonenumber) VALUES('".$firstname."','".$middlename."','".$lastname."','".$email."','".$password."','".$confirmpassword."','".$phonenumber."')";

	if($result=$conn->query($sql))
	{
		header('Location: Login.php');
	 
	}
	else
	{
		echo "That username already exists! Please try again with another.";
    }
    }
	else {
		
	}
	
		
?>

</body>
</html>