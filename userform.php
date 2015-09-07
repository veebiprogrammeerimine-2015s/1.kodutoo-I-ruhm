
<?php 

	/* user_form.php
	Jutumarkide vahele input elemendi NAME
	
	echo $_POST["email"];
	echo $_POST["password"];*/

	//Kontrolli ss kui kasutaja vajutab submit

	//Logimise errorid
	$email_error = "";
	$password_error = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//Kontrolli kasutaja e-posti ja parooli, et see poleks tühi
		if (empty($_POST["email"])) {
			$email_error = "Palun sisesta e-posti aadress!";
		
		}	
		if (empty($_POST["password"])) {
			$password_error = "Palun sisesta parool!";
		
		}
	}
	
	//Registreerumise errorid
	
	
	$reg_email_error = "";
	$reg_password_error = "";
	$reg_password_repeat_error = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

			//Kontrolli kasutaja e-posti ja parooli, et see poleks tühi
			if (empty($_POST["reg_email"])) {
				$reg_email_error = "Palun sisesta e-posti aadress!";
				
			}	
			if (empty($_POST["reg_password"])) {
				$reg_password_error = "Palun sisesta parool!";
				
			}
			if (empty($_POST["reg_password_repeat"])) {
			$reg_password_repeat_error = "Teie parool ei kattunud eelneva parooliga!";
				
			}
		}
	
	
	





?>

<html>
	<head>
		<title>UCP</title>
	</head>
	<body>
	
		<div id="login">
			<form action="userform.php" method="post">
				<h2>Logi sisse</h2>
				<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?><br><br>
				<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?><br><br>
				
				<input type="submit" value="Logi sisse">
			</form>
		</div>
		
		
	 	<div id="register">
			<form action="userform.php" method="post">
				<h2>Registreeru</h2>
				<input name="reg_email" type="email" placeholder="E-post"> <?php echo $reg_email_error; ?><br><br>
				<input name="reg_password" type="password" placeholder="Parool"> <?php echo $reg_password_error; ?><br><br>
				<input name="reg_password_repeat" type="password" placeholder="Korda parooli"> <?php echo $reg_password_repeat_error; ?><br><br>
				
				<input type="submit" value="Registreeru">
			</form>
		</div>
		
		
	</body>
</html>