<?php
	require_once("session_file.php");
	$_SESSION["username"] = $_POST["username"];
	$_SESSION["password"] = $_POST["password"];
?>
<html>

<head>
	<title>Test site</title>
	<link rel="stylesheet" type="text/css" href="page.css">

</head>


<body>
<div id="header">
Test site for practicing html/php.
</div>

<div id="create">
	<p>Your info</p>
	Username: <?php echo $_POST["username"]; ?><br>
	Password: <?php echo $_POST["password"]; ?><br>
</div>

<div id="login">
	<p>Complete registration</p>
	<form method="post" action="user_form.php">
		<input type="name" name="name" placeholder="Name"><br>
		<input type="name" name="aadress" placeholder="City"><br>
		<input type="date"	name="date"><br>
		<input type="submit">
		
	</form>
	<?php
print_r($_SESSION);
?>
</div>

</body>
</html>