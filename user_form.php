<?php

echo $_POST["email"];
	$email_error = "";
echo $_POST["password"];
	$password_error ="";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		//Tühjuse kontroll
		if(empty($_POST["email"])) {
			$email_error ="Unavailable";
			if(empty($_POST["password"])) {	
				$password_error = "Also unavailable";
			}
			
		}
	
	}
?>
<html>
	<head>
		<title> Login </title>
	</head>
	<body>
	
	<h2>Login</h2>
	<form action="user_form.php" method="post">
	<input name="email" type="email" placeholder="E-mail"> <?php echo $email_error; ?> <br>
	<input name="password" type="password" placeholder="Password"> <?php echo $password_error; ?> <br>
	<input type="submit" value="Log in"> 
	</form>
	<h2>Create user</h2>

	</body>
</html> 