<?php
	$viga = '';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if (empty($_GET['email']) ,$_GET['parool']))
		{
			echo $_GET['email'].'<br>'.$_GET['parool'];
		} else {
			$viga = 'Vale parool või kasutaja';
		}
	}
	
?>
<html>
	<head>
		<title> User login page </title>
	</head>
	<body>
	
		<h2>Login</h2>
		<form method="get" action="user_form.php">
			<input type="email" placeholder="E-post" name="email"><br><br>
			<input type="password" placeholder="Parool" name="parool"><br><br>
			<input type="submit" value="Logi sisse">
		</form>
		<?php echo $viga; ?>
		<h2>Create user</h2>
	
	</body>
</html>