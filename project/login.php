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

			//read from database
			$query = "select * from accounts where account_type = '$account_type' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password and $user_data['account_type'] === $account_type and $user_data['email'] === $email and $user_data['user_name'] === $user_name )
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						if ($account_type === 'ADMIN') 
						{
							header("Location: SEARCH_PAGE.php");
						}
						elseif ($account_type === 'USER') 
						{
							header("Location: UPLOAD_PAGE.php");
						}
						
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN IN</title>

    <link rel="stylesheet" href="SIGN_IN_STYLES.css">
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
                <div class='subtitle'><br> WELCOME BACK<br><br>Log in to your account</div>
                <!-- ENTER PHP FILE HERE -->
                <form class='input-fields' method="post" id="LogIN_Form">
                    
                    <input type='text' name='account_type' placeholder='Account Type' class='input-line full-width' required ></input>
                    <input type='text' name='username' placeholder='Username' class='input-line full-width' required></input>
                    <input type='email' name='email' placeholder='Email' class='input-line full-width' required></input>
                    <input type='password' name='password' placeholder='Password' class='input-line full-width' required></input>
                    <input type="submit" class='ghost-round full-width' value="SIGN IN">

                </form>

                <div class="ghost-round full-width">
					<a href="signup.php">CREATE ACCOUNT</a>
				</div>

            </div>
        </div>
    </div>
</body>

</html>