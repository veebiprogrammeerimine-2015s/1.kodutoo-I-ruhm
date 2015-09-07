<?php

		// user_form.php
		// jutumärkide vahele input elemendi väärtus
		
		//echo $_POST["email"];
		
		//echo $_POST["Password"];
		
		$email_error = "";
		
		//kontrolli ainult siis, kui kasutaja vajutab logi sisse nuppu
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			if(empty($_POST["email"]))	{
				$email_error = "ei saa olla tühi";
			}	
			if(empty($_POST["Password"]))
		$password_error = "Teie parooli lünk on tühi";
	
				//parool ei saa olla tühi, kontrollime pikkust
				if(strlen($_POST["Password"]) < 8 ) {
				
					$password_error = "Peab olema vähemalt 8 sümbolit pikk";
		}
?>
<html>
	<head>
	 <title>User login page</title>
	</head>
	<body>
	
		<h2>Login</h2>
		<form action="User_form.php" method="post">
		
		<input name="email" type="Email" placeholder="E-post">* <?php echo $email_error; ?> <br> <br> 
		<input name="Password" type="Password" placeholder="Password">	
		
		<input type ="submit" value ="logi sisse">
		</form>
		<h2>Create user</h2>
		
	</body>
</html>