<?php
session_start();
	require_once("session_file.php");


include('page.css');

$email_error= "";
$password_error= "";

if ($_SERVER["REQUEST_METHOD"]=="POST"){
	
	if(empty($_POST["email"])){
		$email_error="Password must be filled";
	}
	else{
		if(strlen($_POST["password"])<6){
			$password_error="Atleast 6 characters";
		}
	}
}
?>
<html>
	<head>
	<title>New User</title>
	</head>
	
	<body>
	<p>Loodud kasutaja  </p><?php echo $_POST["email"] ?>
	</body>
</html>