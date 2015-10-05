<?php
	
	//jutumärkide vahele input elemendi name
	//echo $_POST["email"];
	//echo $_POST["password"];

	$email_error = "";
	$password_error = "";
	$create_email_error = "";
	$create_password_error = "";
	
	//kontrolli ainult siis kui kasutaja vajutab login nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") 
	
	//kontrollime kasutaja e-posti, et see ei oleks tühi
	if(empty($_POST["email"])) {
		$email_error = "Ei saa olla tühi";
		
	//kontrolli parooli
	
	
	if(empty($_POST["password"])) {
		$password_error = "Ei saa olla tühi";
			
		} else {
			//parool ei ole tühi, kontrollime pikkust
			if(strlen($_POST["password"]) <8 ) {
				$password_error = "peab olema vähemalt 8 sümbolit pikk";
			}
		}
	
	}
?>
<html>
	<head>
		<title>User login page</title>
	<head/>
	<body>
		<h2>Login</h2>
		<form action="user_form.php" method="post">
		<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?> <br><br>
		<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?>
		
		<input type ="submit" value="logi sisse"; <br><br>
		</form>
		
		<h2>Create user</h2>
		
		<form action="user_form.php" method="post">
			<input name="name" type="text"  placeholder="Eesnimi"> <br> <br>
			<input name="perenimi" type="text" placeholder="Perenimi"> <br> <br>
			<input name="email" type="email"  placeholder="e-post@kool.ee"> <?php echo $create_email_error; ?> <br> <br>
			<input name="password" type="password"  placeholder="parool"> <?php echo $create_password_error; ?> <br> <br>
		<form>
			<input type="submit" value="Loo kasutaja"> <br><br>
			
		
		
	</body>

</html>