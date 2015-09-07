<?php
session_start();
	require_once("session_file.php");
	
	if (isset ($_POST['email'])){
		$_SESSION['email']=$_POST['email']
	}
	if (isset ($_POST['email'])){
		$_SESSION['password']=$_POST['password']
	}

include('new_user.php');
include('page.css');

?>
<html>

<head>
<title>Kodutöö</title>
</head>

<body>
<h2>Create User</h2>
	<form action="" method "post">
		<input name="email" type="email" placeholder="Email"/>* 
			<?php echo $email_error; ?>
		<br>
		<input name="password" type="password" placeholder="Password"/>*
			<?php echo $password_error; ?>
		<br>
		<input type="submit" value="Create user">
	</form>


</body>

</html>
