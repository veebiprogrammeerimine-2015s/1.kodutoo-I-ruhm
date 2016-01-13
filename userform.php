<?php

	
	$email_error = "";
	$password_error ="";
	$create_username_error = "";
	$create_email_error = "";
	$create_password_error = "";
	
if($_SERVER["REQUEST_METHOD"] == "POST") {	
		if (isset($_POST["login"])) {
			if ( empty($_POST["email"])){
				$email_error = "See väli on kohustuslik";
			}
			
			if ( empty($_POST["password"])){
				$password_error = "See väli on kohustuslik";	
			} else {
				if(strlen($_POST["password"]) < 8) {
					$password_error = "Peab olema vähemalt 8 tähemärki pikk";
				}
			}
		} else {
			if ( empty($_POST["create_username"])){
				$create_username_error = "See väli on kohustuslik";
			}
			if ( empty($_POST["create_email"])){
				$create_email_error = "See väli on kohustuslik";		
			}
			if ( empty($_POST["create_password"])){
				$create_password_error = "See väli on kohustuslik";	
			} else {
				if(strlen($_POST["create_password"]) < 8) {
					$create_password_error = "Peab olema vähemalt 8 tähemärki pikk";
				}
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
		<form action="login.php" method="post">
            <input name="email" type="email" placeholder="E-post" > <?php echo $email_error ?> <br><br>
		    <input name="password" type="password" placeholder="Parool" > <?php echo $password_error ?> <br><br>
		
		    <input type="submit" value="Logi sisse"> 
		</form>
		<h2>Loo kasutaja</h2>
		<form action="login.php" method="post"> 
			<input name="create_userame" type="text" placeholder="Kasutajanimi"> <?php echo $create_username_error; ?> <br><br>
			<input name="create_email" type="email" placeholder="E-post"> <?php echo $create_email_error; ?> <br><br>
			<input name="create_password" type="password" placeholder="Parool"> <?php echo $create_password_error; ?> <br><br> 
            
			<input type="submit" value="Registreeru"> <br><br>
        </form>
	
	</body>
     MVP IDEE - Note taker. Saab oma postitusi kirja panna ja ise näha. Alguseks kõik ning edasiseks saab äkki joonistada, due date, kategooriad etc?
</html> 
