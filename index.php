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
Test site.
</div>

<div id="create">
	<p>Create new user</p>
	<form method="post" action="new_user.php">
		<input type="email" name="username" placeholder="E-mail"><br>
		<input type="password" name="password" placeholder="Password"><br>
		<input type="submit">
	</form>
</div>

<div id="login">
		
</div>

</body>
</html>
