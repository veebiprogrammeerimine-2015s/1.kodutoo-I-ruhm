<?php

	//kodutoo.php
	
	//jutumärkide vahele input elemndi NAME
	//echo $_POST["email"];
	//echo $_POST["password"];
	
	$email_error = "";
	$password_error = "";
	
	// Kontrolli ainult siis kui kasutaja vajutab logi sisse nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {

		//Kontrollime kasutaja e-posti et see ei ole tühi
		if(empty($_POST["email"])) {
		$email_error = "* Ei tohi jääda tühjaks";
		}
		
		//Kontrollime parooli
		if(empty($_POST["password"])) {
		$password_error = "* Ei tohi jääda tühjaks";
		}else {
			
				//parool ei ole tühi, kontrollime pikkust
				if(strlen($_POST["password"]) < 8 ){
					
					$password_error = "Peab olema vähemalt 8 sümbolit pikk";
					
				}
		
		}
	}
?>
<html>
	<head>
		<title>User login page</title>
	</head>
	<body>
		
		<h2>Login</h2>
		<form action="kodutoo.php" method="post">
			<input name="email" type="email"  placeholder="e-post@kool.ee"> <?php echo $email_error; ?> <br> <br>
			<input name="password" type="password"  placeholder="parool"> <?php echo $password_error; ?> <br> <br>
		<form>
			<input type="submit" value="Logi sisse">
		
		<h2>Create user</h2>
		<form action="kodutoo.php" method="post">
			<input name="name" type="text"  placeholder="Eesnimi"> <br> <br>
			<input name="name" type="text"  placeholder="Perenimi"> <br> <br>
			<input name="email" type="email"  placeholder="e-post@kool.ee"> <?php echo $email_error; ?> <br> <br>
			<input name="password" type="password"  placeholder="parool"> <?php echo $password_error; ?> <br> <br>
		<form>
			<input type="submit" value="Loo kasutaja">

	</body>

</html>