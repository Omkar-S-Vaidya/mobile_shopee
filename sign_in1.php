<?php
try{

session_start();

	include("connection.php");
	include("function.php");
	
	
	if($_SERVER["REQUEST_METHOD" ] == "POST")
	{
		//something was posted
		$user_name = $_POST['email'];
		$password = $_POST['psw'];
		
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id, user_name, password) values ('$user_id','$user_name','$password')";
		
			mysqli_query($con, $query);
			header("Location: login.php");
			die;
		}
		else
		{
			echo "Please enter valid information...";
		}
		
		
	}
}
catch(Exception $e)
{
	echo "refresh it again";
	
}

?>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/log.css">
<style>
</style>
</head>
<body>


<div class="bg-img">
<form method = "post" class="container">
  
    <h1>Registration</h1>
 
  
<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>


    <label for="psw"><b>Enter Password</b></label>
    <input type="password" placeholder="Create a Password" name="psw" required>
	
<button type="submit" class="btn">Submit</button>
    <p><a href="login1.php"><h4>Login in</h4></a></p>
  </div>
</div>
</form>


</body>
</html>