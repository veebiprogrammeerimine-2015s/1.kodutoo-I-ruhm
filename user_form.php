<?php

	// user_form.php
	
	//jutumärkide vahele input elemendi NAME
	//echo $_POST["email"]; 
	//echo $_POST["password"];
	
	$email_error = "" ;
	$password_error = "" ;
	$eesnimi_error = "" ;


	// kontrolli ainult siis, kui kasutaja vajutab "logi sisse" nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST"){

		//kontrollime, et e-post ei oleks tühi
		if(empty($_POST["email"])) { 
			$email_error = "Ei saa olla tühi";
		}
		//kontrollime parooli	
		if(empty($_POST["password"])) { 
			$password_error = "Ei saa olla tühi";
		} 
		if(empty($_POST["eesnimi"])) { 
			$eesnimi_error = "Ei saa olla tühi";
		}
		else {
		
			//parooli pikkuse kontroll, kui see ei ole tühi
			if(strlen($_POST["password"])<8){
				
				$password_error = "Peab olema vähemalt 8 sümbolit pikk";
		
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
		<form action="user_form.php" method="post">
			<input name="email" type="email" placeholder="E-post">* <?php echo $email_error; ?><br> <br>
			<input name="password" type="password" placeholder="parool">*<br> <br>
			<input name="eesnimi" type="text" placeholder="nimi">*

<?php echo $password_error; ?><br><br>
			
			<input type="submit" value="logi sisse"> 
		</form>
		
		<h2>Kasutaja loomine</h2>
		
	</body>
</html>