<?php

	//user_form.php
	// e post & parool
	
	//jutumarkide vahele input elemendi NAME
	//echo $_POST["email"];
	//echo $_POST["password"];
	$email_error = "";
	$password_error = "";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		//kontrollime kasutaja eposti lahtrit, et see ei oleks tyhi
	
		if (empty($_POST["email"])){
			$email_error = "Emaili ei tohi tyhjaks j2tta";
		}
		
		if (empty($_POST["password"])){
			$password_error = "Parooli ei tohi tyhjaks j2tta";
		} else {
		//kontrollime pikkust
		
		if (strlen($_POST["password"]) <8 ){
			$password_error = "Peab olema vahemalt 8 symbolit";
		}
		
	}
	}
	
	//kontrolli ainult siis kui kasutaja vajutab login nuppu
	
	
	?>
	
	<html>
		<head>
			<Title>User login page</title>
		</head>
			<body>
			
				<h2>Login</h2>
					<form action="user_form.php" method="post">
						<input name="email" type="email" placeholder="E-post" > * <?php echo $email_error; ?> <br> <br> 
						<input name="password" type="password" placeholder="Parool" > * <?php echo $password_error ; ?><br><br>
						
						<input type="submit" value="Logi sisse">
					</form>
				<h2>Create user</h2>
					<form action="user_form.php" method="post">
					<input name="email" type="email" placeholder="E-post" > * <?php echo $email_error; ?> <br> <br> 
					<input name="password" type="password" placeholder="Parool" > * <?php echo $password_error ; ?><br><br>
						
			</body>
	</html>