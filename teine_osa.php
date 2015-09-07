<?php
$email_error = "";
$pw_error = "";
$sugu_error = "";
	// kontrolli ainult kui vajutatakse submit
	if($_SERVER["REQUEST_METHOD"]  == "POST"){
			
	//kontrollime eposti et poleks tühi
	
			if(empty($_POST["email"])){
		$email_error = "Gibe email please";
		}
	}
	
	if($_SERVER["REQUEST_METHOD"]  == "POST"){

		if(empty($_POST["password"])){
			$pw_error = "Gibe PW please";
		} else {
			
			//kontrollime pikkust
			if(strlen($_POST["password"] <= 8)){
				$pw_error = "peab olema vähemalt 8 sümbolit pikk";
			}
		}
	}
?>


<html>

	<head>
	
		<title>
			Login page
		</title>
	
	</head>

	<body>
			
		<h2>Create user</h2>
			<form action="teine_osa.php" method="post">
				<input name="email" type="email" placeholder="@example.com" > <?php echo $email_error;?> <br>
				<br>
				<input name="password" type="password" placeholder="Parool" > <?php echo $pw_error;?>
				<br><br>
				<input name="Sugu" type="text" placeholder="M/N" > <?php echo $sugu_error;?>
				<br><br>
				<input name="Eesnimi" type="text" placeholder="John" >
				<br><br>
				<input name="Perekonnanimi" type="text" placeholder="Doe" >
				<br><br>
				<input name="Elukoht" type="text" placeholder="Harjumaa" >
				<br><br>
				<input type="submit" value="Log In">
			</form>	
		
	</body>
	
</html>