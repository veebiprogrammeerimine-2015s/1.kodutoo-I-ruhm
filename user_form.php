<?php

echo $_POST["email"];
	$email_error = "";
echo $_POST["password"];
	$password_error ="";
echo $_POST["username"];
	$username_error ="";
echo $_POST["newemail"];
	$email_error2 ="";
echo $_POST["new_password"];
	$new_password_error ="";
echo $_POST["confirm_password"];
	$confirm_password_error ="";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		//Tühjuse kontroll
		if(empty($_POST["email"])) {
			$email_error ="Unavailable";
		}
		if(empty($_POST["password"])) {	
			$password_error = "Also unavailable";
		}
		if(empty($_POST["username"])) {
			$username_error = "Please enter an username";
		}
		if(empty($_POST["newemail"])) {
			$email_error2 = "Please add your E-mail";
		}
		if(empty($_POST["new_password"])) {
			$new_password_error = "Please enter a password";
		}
		if(empty($_POST["confirm_password"])) {
			$confirm_password_error = "Does not match";
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
	<form action="user_form.php" method="post">
	<input name="username" type="text" placeholder="New username"> <?php echo $username_error; ?> <br>
	<input name="newemail" type="email" placeholder="Email"> <?php echo $email_error2; ?> <br>
	<input name="new_password" type="password" placeholder="New password"> <?php echo $new_password_error; ?> <br>
	<input name="confirm_password" type="password" placeholder="Confirm password"> <?php echo $confirm_password_error; ?> <br>
	<input type="submit" value="Create user">
	</form>
	Ideeks on teha endale kodutööde tahvel või list koos kuupäevaga, mis päevaks see vaja teha on. Ilmselt tuleb mingi lihtne tabel, kus esimene tulp on kodutöö kirjeldus, teine tulp on esitamise viimane kuupäev, kolmas on tulp, kus on kastid, kuhu saab linnukese teha, andes endale teada, et kodutöö on tehtud. Neljas võiks olla e-meili tulp, kus on vastava tunni õppejõu vastav e-meil.
	</body>
</html>