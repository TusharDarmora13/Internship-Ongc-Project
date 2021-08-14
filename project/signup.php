<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$account_type = $_POST['account_type'];
		$email = $_POST['email'];
		$user_name = $_POST['username'];
		$password = $_POST['password'];


		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into accounts (user_id,user_name,account_type,email,password) values ('$user_id','$user_name','$account_type','$email','$password')";

			mysqli_query($con, $query);
			echo "done";
			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
			header("refresh:3ms;Location: signup.php");
		}
	}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>

    <link rel="stylesheet" href="SIGN_UP_STYLES.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

    <div class='container'>
        <div class='window'>
            <div class='overlay'></div>
            <div class='content'>
                <div class='welcome'>ONGC</div>
                <div class='subtitle'><br> New Here!!!!!<br><br>Create your own account</div>
                <!-- ENTER PHP FILE HERE -->
                <form class='input-fields' method="post" id="SignUP_Form">    
                
					<input type='text' name='account_type' placeholder='Account Type' class='input-line full-width' required ></input>
                    <input type='text' name='username' placeholder='Username' class='input-line full-width' required></input>
                    <input type='email' name='email' placeholder='Email' class='input-line full-width' required></input>
                    <input type='password' name='password' placeholder='Password' class='input-line full-width' required></input>
                    <input type="submit" class='ghost-round full-width' value="CREATE ACCOUNT">

                </form>

                <div class="ghost-round full-width">
					<a href="login.php">SIGN IN</a>
				</div>

            </div>
        </div>
    </div>
</body>

</html>