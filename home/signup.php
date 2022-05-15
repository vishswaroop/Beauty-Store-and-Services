<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>
   

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 40%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: darkcyan;
		border: none;
	}

	#box{

		background-color: wheat;
        background-image: url(bg2.jpg);
        background-repeat: no-repeat;
        background-size: 100% 100%;
        text-align: left;
		margin: auto;
		width: 90%;
		padding: 95px;
	}

	</style>

	<div id="box" >
         <h1 style="background-color:powderblue;  width:36%;padding: 30px;">KAAVS BEAUTY SERVICES</h1>
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Create account</div>

			<input id="text" type="text" name="user_name" placeholder="User name"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>
            <input id="text" type="text" name="email" placeholder="Email"><br><br>
            <input id="text" type="text" name="mobile" placeholder="Mobile"><br><br>

			<input id="button" type="submit" value="create account"><br><br>

			<a href="login.php">login</a><br><br>
		</form>
	</div>
</body>
</html>