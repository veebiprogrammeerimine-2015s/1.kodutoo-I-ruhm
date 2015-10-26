<?php
	require_once("session_file.php");
	
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
	Username:<?php echo $_SESSION["username"]; ?><br>
	Password:<?php echo $_SESSION["password"]; ?><br>
	Name::<?php echo $_POST["name"]; ?><br>
	Birthday::<?php echo $_POST["date"]; ?><br>
	Aadress:<?php echo $_POST["aadress"]; ?><br>
	
</div>

<div id="login">
<?php
print_r($_SESSION);
?>

	
</div>

</body>
</html>

