<?php
	$emailErr = $passwordErr = "";
	$email = $password = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		 if (empty($_POST["email"])) {
			 $emailErr = "E-mail is required";
		 } else {
			 $email = $_POST["email"];
		 }
		 if (empty($_POST["password"])) {
			 $passwordErr = "Password is required";
		 } else {
			 if (strlen($_POST["password"]) < 8) {
				 $passwordErr = "Password must be > 8 characters";
			 } else {
				 $password = $_POST["password"];
			 }
		 }
	}

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title> User login page </title>
	</head>
	<body>

		<h2>Login</h2>
		<p><span>* required field.</span></p>
		<form method="post">
		   <input type="email" name="email" placeholder="E-mail" value="<?php echo $email;?>">
		   <span>* <?php echo $emailErr;?></span>
		   <br><br>
		   <input type="password" name="password" placeholder="Password" value="<?php echo $password;?>">
		   <span class="error">* <?php echo $passwordErr;?></span>
		   <br><br>
		   <input type="submit" name="submit" value="Submit">
		</form>

		<h2>Create user</h2>

	</body>
</html>
