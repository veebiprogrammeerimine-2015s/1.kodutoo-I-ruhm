
<?php

	$email_error = "";
	$password_error = "";
	/* user_form.php
	Jutumarkide vahele input elemendi NAME
	
	echo $_POST["email"];
	echo $_POST["password"];*/

	//Kontrolli ss kui kasutaja vajutab submit
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//Kontrolli kasutaja e-posti ja parooli, et see poleks tühi
		if (empty($_POST["email"])) {
			$email_error = "Teie e-posti lünk on tühi";
		
		}	
		if (empty($_POST["password"])) {
			$password_error = "Teie parooli lünk on tühi";
		
		}	else {
			if (strlen($_POST["password"]) < 8) {
				echo "Peab olema vähemalt 8 sümbolit pikk";
				
			}
			
		}
		
	}
	




?>

<html>
	<head>
		<title>UCP</title>
	</head>
	<body>
		<form action="userform.php" method="post">
		<h2>Logi sisse</h2>
		<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?><br><br>
		<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?><br><br>
		
		<input type="submit" value="Logi sisse">
		</form>
		
		<h2>Registreeru</h2>
		
	</body>
</html>