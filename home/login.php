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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
        background-image: url(bg1.png);
        background-repeat: no-repeat;
        text-align:right;
		margin: auto;
        background-size: 100% 100%;
		width: 900px;
		padding: 210px;
	}
     

	</style>

	<div id="box">
      <h1 >KAAVS BEAUTY SERVICES</h1>
		
		<form method="post">
            
			<div style="font-size: 20px;margin: 10px;color: dark blue; text-align: right;">Login</div>

			<input id="text" type="text" name="user_name" placeholder="User name"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>

			<input id="button" type="submit" value="login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>